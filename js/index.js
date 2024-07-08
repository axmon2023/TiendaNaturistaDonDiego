const logo = document.getElementById("logo");
const titulo = document.getElementById('titulo');
const wasap = document.getElementById('wasap');

function girar() {
  logo.style.transform = "scale(1, -1, 1)";
  logo.style.transition = "3s";
  titulo.style.transform = "scale(1, -1, 1)";
  titulo.style.transition = "3s";
 
}

logo.addEventListener("mouseleave", () => {
  girar();
});



titulo.addEventListener('mouseleave', () => {
girar();
})

function girar0() {
  wasap.style.transform = "scale(1, -1, 1)";
  wasap.style.transition = "3s";
}

wasap.addEventListener('mouseleave', () => {
  girar0();
  })


