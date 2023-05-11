var btn = document.querySelector('.toggle');
var btnst = true;
btn.onclick = function () {
  if (btnst == true) {
    document.querySelector('.toggle span').classList.add('toggle');
    document.getElementById('sidebar').classList.add('sidebarshow');
    btnst = false;
  } else if (btnst == false) {
    document.querySelector('.toggle span').classList.remove('toggle');
    document.getElementById('sidebar').classList.remove('sidebarshow');
    btnst = true;
  }
}

const linkAncorado = document.querySelector('a[href="#Oque"]');
linkAncorado.addEventListener('click', function (event) {
  event.preventDefault(); // evita que a página seja recarregada
  const secaoAncorada = document.querySelector('#Oque');
  secaoAncorada.scrollIntoView({ behavior: 'smooth' }); // move a página suavemente até a seção ancorada
});


function voltarAoTopo() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}



