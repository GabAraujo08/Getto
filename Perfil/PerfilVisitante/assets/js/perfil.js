

        // const btnExcluirSeguindo = document.getElementById("btn-excluirSeguindo");
        // const btnConfirmarExcluir = document.getElementById("btn-confirmar-excluir");
        // const divConfirmacaoExcluir = document.getElementById("confirmacao-excluirSeguindo");

        // btnExcluirSeguindo.addEventListener("click", () => {
        //   divConfirmacaoExcluir.style.display = "block";

        // });

        // btnConfirmarExcluir.addEventListener("click", () => {
        //   divConfirmacaoExcluir.style.display = "none";

        // });



        // const btnBloquear = document.getElementById("btn-bloquearSeguindo");
        // const btnConfirmarBloqueio = document.getElementById("btn-confirmarBloqueio");
        // const divConfirmacaoBloqueio = document.getElementById("confirmacao-bloqueio");

        // btnBloquear.addEventListener("click", () => {
        //     divConfirmacaoBloqueio.style.display = "block";

        // });

        // btnConfirmarBloqueio.addEventListener("click", () => {
        //     divConfirmacaoBloqueio.style.display = "none";

        // });


/*ABRIR INPUT FOTO PAPEL DE PAREDE*/


const btnPapelParedeModal = document.getElementById('btn-papel-parede-modal');
const inputPapelParedeModal = document.getElementById('input-papel-parede-modal');
const imgCapa = document.querySelector('.img-capa');

btnPapelParedeModal.addEventListener('click', function () {
  inputPapelParedeModal.click();
});







inputPapelParedeModal.addEventListener('change', function () {
  if (this.files && this.files[0]) {
    const reader = new FileReader();

    reader.onload = function (e) {
      imgCapa.src = e.target.result;
      previewImg.src = e.target.result;
    }

    reader.readAsDataURL(this.files[0]);
  }
});





/*ABRIR INPUT FOTO PERFIL*/


const btnFotoPerfil = document.getElementById('btn-perfil-modal');
const inputFotoPerfil = document.getElementById('input-perfil-modal');
const imgPerfil = document.querySelector('.img-usuario');

btnFotoPerfil.addEventListener('click', function () {
  inputFotoPerfil.click();
});



inputFotoPerfil.addEventListener('change', function () {
  if (this.files && this.files[0]) {
    const reader = new FileReader();

    reader.onload = function (e) {
      imgPerfil.src = e.target.result;
      previewImg.src = e.target.result;
    }

    reader.readAsDataURL(this.files[0]);
  }
});




