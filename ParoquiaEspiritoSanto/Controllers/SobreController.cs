using Microsoft.AspNetCore.Mvc;

namespace ParoquiaEspiritoSanto.Controllers
{
    public class SobreController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }
    }
}
