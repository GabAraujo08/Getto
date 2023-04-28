

/*ISSO FAZ COM QUE O FORMULARIO MUDE DE ACORDO SE A PESSOA SELECIONOU VISITANTE OU ARTISTA*/

var registroArtista = document.getElementById('btn-artista');
var registroVisitante = document.getElementById('btn-visitante');
var formArtista = document.getElementById('formArtista');
var formVisitante = document.getElementById('formVisitante');


registroArtista.addEventListener('click', function() {
  formArtista.style.display = 'block';
  formVisitante.style.display = 'none';
});

registroVisitante.addEventListener('click', function() {
  formArtista.style.display = 'none';
  formVisitante.style.display = 'block';
  
  
});


/*---------------------------- LOGICA PARA O FORMULARIO POR ETAPAS ----------------------------*/ 

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
        // document.getElementById("nextBtn").innerHTML = "Enviar";
        document.getElementById("nextBtn").style.display = "none";
        document.getElementById("enviarBtn").style.display = "inline";

        // document.getElementById("nextBtn").type = "submit";
        
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
        document.getElementById("formVisitante").submit();
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


/* ---------------------------- PREVIEW DA IMAGEM DO ARTISTA ---------------------------- */ 

const input = document.getElementById("input-file");
const preview = document.getElementById("preview-image");

input.addEventListener("change", () => {
  const file = input.files[0];
  const reader = new FileReader();
  reader.readAsDataURL(file);
  reader.onload = () => {
    preview.src = reader.result;
    preview.style.display = "block";
  }
});

/* ---------------------------- MODAL ---------------------------- */


const handleClickOutside = (event) => {
    let overlay = document.getElementById("overlay");
    let modal = document.getElementById("modal");
    if (!modal.contains(event.target)) {
        modal.style.display = 'none';
        overlay.style.display = 'none';
        document.removeEventListener('click', handleClickOutside, false);
    }
}

const openModal = () => {
    let overlay = document.getElementById("overlay");
    let modal = document.getElementById("modal");
    overlay.style.display = 'flex'
    modal.style.display = 'flex'
    setTimeout(() => { document.addEventListener('click', handleClickOutside, false) }, 200);
}





