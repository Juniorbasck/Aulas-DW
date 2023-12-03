using ApiA.Models;

namespace ApiA.Servicves
{
    public class VectorService
    {

        public List<int> GerarVector()
        {
            Random random = new Random();
            List<int> vetorAleatorio = new List<int>();

            for (int i = 0; i < 20; i++)
            {
                vetorAleatorio.Add(random.Next(-100, 101));
            }

            return vetorAleatorio;
        }
    }
}
