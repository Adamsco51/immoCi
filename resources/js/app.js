import './bootstrap';


window.addEventListener("scroll", function () {
    const header = document.getElementById("main-header");
    if (window.scrollY > 50) {
      header.classList.add("backdrop-blur-md", "shadow-md", "translate-y-2", "text-black");
      header.classList.remove("bg-transparent", "text-white");
    } else {
      header.classList.remove("bg-white", "shadow-md", "translate-y-2");
      header.classList.add("bg-transparent");
    }
  });
