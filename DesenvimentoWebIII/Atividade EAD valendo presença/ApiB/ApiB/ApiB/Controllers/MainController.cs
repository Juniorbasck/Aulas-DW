﻿using Microsoft.AspNetCore.Mvc;
using System.Collections.Generic;
using System.Net.Http;
using System.Net.Http.Json;  // Adicione esta linha
using System.Threading.Tasks;

namespace ApiB.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class MainController : Controller
    {
        private readonly HttpClient _httpClient;

        public MainController(IHttpClientFactory httpClientFactory)
        {
            _httpClient = httpClientFactory.CreateClient();
            _httpClient.BaseAddress = new System.Uri("http://localhost:5284");
        }

        [HttpGet("ordenarvetor")]
        public async Task<IActionResult> OrdenarVetor()
        {
            var response = await _httpClient.GetAsync("/api/criar");

            if (!response.IsSuccessStatusCode)
            {
                return StatusCode((int)response.StatusCode, "Erro ao chamar o endpoint da ApiA");
            }

            var jsonContent = await response.Content.ReadAsStringAsync();
            Console.WriteLine("JSON Retornado: " + jsonContent); 

            var responseObject = await response.Content.ReadFromJsonAsync<Dictionary<string, List<int>>>();

            if (responseObject == null || !responseObject.ContainsKey("vetorAleatorio"))
            {
                return StatusCode(500, "Resposta da ApiA em um formato inesperado");
            }

            var vetorAleatorio = responseObject["vetorAleatorio"];
            vetorAleatorio.Sort();

            return Ok(new { VetorOrdenado = vetorAleatorio });
        }
    }
}
