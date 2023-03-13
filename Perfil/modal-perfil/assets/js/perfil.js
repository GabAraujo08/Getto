

const imagem = document.getElementById('papel-parede-img');
imagem.addEventListener('click', function() {
  const input = document.createElement('input');
  input.type = 'file';
  input.accept = 'image/*';
  input.addEventListener('change', function() {
    const arquivo = input.files[0];
    const caminho = imagem.getAttribute('data-caminho');
    
    // faça o upload da imagem para o servidor usando um formulário ou AJAX
    
    // atualize a imagem com o novo caminho
    imagem.setAttribute('data-caminho', novoCaminho);
  });
  
  input.click();
});


const imagemUsuario = document.getElementById('perfil-img');
imagemUsuario.addEventListener('click', function() {
  const input = document.createElement('input');
  input.type = 'file';
  input.click();
  document.body.appendChild(input);
});