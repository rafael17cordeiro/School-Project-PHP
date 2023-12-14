const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe((el)))
window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");

    setTimeout(() => {
        loader.classList.add("loader--hidden");

        loader.addEventListener("transitionend", () => {
           
        });
    }, 500); 
});



function togglePopup() {
    var popup = document.getElementById("popup-1");
    popup.classList.toggle("active");
  
    // Adiciona um atraso para aplicar a transição de fechamento
    if (!popup.classList.contains("active")) {
      var content = document.querySelector(".popup .content");
      content.classList.add("closing");
      setTimeout(function () {
        content.classList.remove("closing");
      }, 300); // Tempo igual à transição (0.3s = 300ms)
    }
  }
  

  function togglePopup2() {
    var popup = document.getElementById("popup-2");
    popup.classList.toggle("active");
  
    if (!popup.classList.contains("active")) {
      var content = document.querySelector("#popup-2 .content");
      content.classList.add("closing");
      setTimeout(function () {
        content.classList.remove("closing");
      }, 300); // Tempo igual à transição (0.3s = 300ms)
    }
  }
  
  function togglePopup3() {
    var popup = document.getElementById("popup-3");
    popup.classList.toggle("active");
  
    if (!popup.classList.contains("active")) {
      var content = document.querySelector("#popup-3 .content");
      content.classList.add("closing");
      setTimeout(function () {
        content.classList.remove("closing");
      }, 300); // Tempo igual à transição (0.3s = 300ms)
    }
  }
  


