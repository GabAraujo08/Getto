
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
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
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
  var fileType = file.type.split('/')[0]; // Obtém o tipo de arquivo (imagem, vídeo ou música)
  var previewContainer = document.getElementById('previewContainer');
  var previewCover = document.getElementById('previewCover');

  if (fileType === 'image') {
    // Se for uma imagem, cria uma tag de imagem e define o atributo src com a URL do arquivo selecionado
    var img = document.createElement('img');
    img.src = URL.createObjectURL(file);
    previewContainer.innerHTML = ''; // Limpa o conteúdo anterior
    previewContainer.appendChild(img);
  } else if (fileType === 'video') {
    // Se for um vídeo, cria uma tag de vídeo e define o atributo src com a URL do arquivo selecionado
    var video = document.createElement('video');
    video.src = URL.createObjectURL(file);
    video.controls = true; // Adiciona controles de reprodução
    previewContainer.innerHTML = ''; // Limpa o conteúdo anterior
    previewContainer.appendChild(video);
  } else if (fileType === 'audio') {
    // Se for uma música, cria uma tag de áudio e define o atributo src com a URL do arquivo selecionado
    var audio = document.createElement('audio');
    audio.src = URL.createObjectURL(file);
    audio.id = 'player'
    audio.controls = true; // Adiciona controles de reprodução
    previewContainer.innerHTML = ''; // Limpa o conteúdo anterior
    previewContainer.appendChild(audio);

    var inputCover = document.createElement('input');
inputCover.type = 'file';
inputCover.id = 'inputCover';
inputCover.addEventListener('change', function(event) {

  var coverFile = event.target.files[0]; // Obtém o arquivo da capa do single
  var coverType = coverFile.type.split('/')[0]; // Obtém o tipo de arquivo da capa do single

  if (coverType === 'image') {
    // Se for uma imagem, cria uma tag de imagem e define o atributo src com a URL do arquivo selecionado
    // var img = document.createElement('img');
    // img.src = URL.createObjectURL(coverFile);
    // previewCover.innerHTML = ''; // Limpa o conteúdo anterior
    // previewCover.appendChild(img);
  } else {
    // Caso contrário, exibe uma mensagem de erro ou realiza outras ações de tratamento
    previewCover.innerHTML = 'Arquivo inválido. Por favor, selecione uma imagem como capa do single.';
  }
  
  extrator(coverFile); // chama a função extrator passando o arquivo da capa do single como parâmetro

});
previewContainer.appendChild(inputCover);

var label = document.createElement('label');
label.htmlFor = 'inputCover';
label.textContent = 'Selecionar a capa';
previewCover.appendChild(label);
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
