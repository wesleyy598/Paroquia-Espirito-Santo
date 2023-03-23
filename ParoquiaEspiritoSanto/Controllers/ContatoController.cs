using Microsoft.AspNetCore.Mvc;

namespace ParoquiaEspiritoSanto.Controllers
{
    public class ContatoController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }
    }
}
