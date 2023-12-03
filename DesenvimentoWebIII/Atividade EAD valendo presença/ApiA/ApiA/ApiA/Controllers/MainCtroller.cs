using ApiA.Servicves;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Mvc;

namespace ApiA.Controllers
{
    [Route("api")]
    [ApiController]
    public class MainCtroller : ControllerBase
    {
        private readonly VectorService _vectorService;


        public MainCtroller(VectorService vectorService)
        {
            _vectorService = vectorService;
        }

        [HttpGet("criar")]
        public IActionResult CriarVetor()
        {
            List<int> vetorAleatorio = _vectorService.GerarVector();

            return Ok(new { VetorAleatorio = vetorAleatorio });
        }
    }
}
