
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



// ---------------- FORMULARIO POR ETAPAS --------------------------

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Enviar";
  } else {
    document.getElementById("nextBtn").innerHTML = "Próximo";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}


document.getElementById("option-1").addEventListener("click", function() {
  document.getElementById("inputFile").disabled = false;
});

document.getElementById("option-2").addEventListener("click", function() {
  document.getElementById("inputFile").disabled = false;
});

document.getElementById("option-3").addEventListener("click", function() {
  document.getElementById("inputFile").disabled = false;
});

const radio1 = document.getElementById('option-1');

const radio2 = document.getElementById('option-2');

const radio3 = document.getElementById('option-3');

const inputFile = document.getElementById('inputFile');



radio1.addEventListener('click', function () {
  inputFile.click();
});

radio2.addEventListener('click', function () {
  inputFile.click();
});

radio3.addEventListener('click', function () {
  inputFile.click();
});



radio3.addEventListener('click', function () {
  document.getElementById("capaMusica").style.display = "block";
});  //PUXA O INPUT DA CAPA

// ------------------- PREVIEW DO INPUT ---------------------


document.getElementById('inputFile').addEventListener('change', function(event) {
  var file = event.target.files[0];
  var fileType = file.type.split('/')[0];
  var previewContainer = document.getElementById('previewContainer');
  var previewCover = document.getElementById('previewCover');

  if (fileType === 'image') {
    var img = document.createElement('img');
    img.src = URL.createObjectURL(file);
    previewContainer.innerHTML = '';
    previewContainer.appendChild(img);
  } else if (fileType === 'video') {
    var video = document.createElement('video');
    video.src = URL.createObjectURL(file);
    video.controls = true;
    previewContainer.innerHTML = '';
    previewContainer.appendChild(video);
  } else if (fileType === 'audio') {
    var audio = document.createElement('audio');
    audio.src = URL.createObjectURL(file);
    audio.id = 'player';
    audio.controls = true;
    previewContainer.innerHTML = '';
    previewContainer.appendChild(audio);

    var inputCapa = document.getElementById('inputCapa');
    inputCapa.style.display = 'block';

    extrator(file); // chama a função extrator passando o arquivo como parâmetro
  }
});



// ----------------------- INPUT MUSICA CAPA -------------------------

/*
	By Mushfiq Shishir, hello@mrshishir.me, www.mrshishir.me	
*/

'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));







/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidebar").style.width = "100px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}




const btnExcluir = document.getElementById("btn-excluir");
const btnConfirmar = document.getElementById("btn-confirmar");
const divConfirmacao = document.getElementById("confirmacao-excluir");

btnExcluir.addEventListener("click", () => {
    divConfirmacao.style.display = "block";

});

btnConfirmar.addEventListener("click", () => {
    divConfirmacao.style.display = "none";

});



const btnBloquear = document.getElementById("btn-bloquear");
const btnConfirmarBloqueio = document.getElementById("btn-confirmarBloqueio");
const divConfirmacaoBloqueio = document.getElementById("confirmacao-bloqueio");

btnBloquear.addEventListener("click", () => {
    divConfirmacaoBloqueio.style.display = "block";

});

btnConfirmarBloqueio.addEventListener("click", () => {
    divConfirmacaoBloqueio.style.display = "none";

});



const btnExcluirSeguindo = document.getElementById("btn-excluirSeguindo");
const btnConfirmarSeguindo = document.getElementById("btn-confirmarSeguindo");
const divConfirmacaoSeguindo = document.getElementById("confirmacao-excluirSeguindo");





const btnBloquearSeguindo = document.getElementById("btn-bloquearSeguindo");
const btnConfirmarBloqueioSeguindo = document.getElementById("btn-confirmarBloqueioSeguindo");
const divConfirmacaoBloqueioSeguindo = document.getElementById("confirmacao-bloqueioSeguindo");







