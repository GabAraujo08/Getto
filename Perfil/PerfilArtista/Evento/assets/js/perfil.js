 // Adicione isso no seu arquivo JavaScript
 const btnMudarFotoPerfil = document.querySelector('#btnMudarFotoPerfil');
 const inputFotoPerfil = document.querySelector('#inputFotoPerfil');

 btnMudarFotoPerfil.addEventListener('click', () => {
     inputFotoPerfil.click();
 });

 inputFotoPerfil.addEventListener('change', () => {
     const file = inputFotoPerfil.files[0];
     const reader = new FileReader();

     reader.addEventListener('load', () => {
         const imgPreview = document.querySelector('.img-perfil-editar');
         imgPreview.src = reader.result;
     });

     if (file) {
         reader.readAsDataURL(file);
     }
 });


 const btnMudarFotoParede = document.querySelector('#btnMudarFotoParede');
 const inputFotoParede = document.querySelector('#inputFotoParede');

 btnMudarFotoParede.addEventListener('click', () => {
     inputFotoParede.click();
 });

 inputFotoParede.addEventListener('change', () => {
     const file = inputFotoParede.files[0];
     const reader = new FileReader();

     reader.addEventListener('load', () => {
         const imgPreview = document.querySelector('.img-capa');
         imgPreview.src = reader.result;
     });

     if (file) {
         reader.readAsDataURL(file);
     }
 });