// Obtém referências aos botões e às seções correspondentes
const btnPublicacoes = document.getElementById('btn-exibirPublicacoes');
const btnEventos = document.getElementById('btn-exibirEventos');
const divPublicacoesMobile = document.getElementById('publicacoes-mobile');
const divEventosMobile = document.getElementById('eventos-mobile');
const divPublicacoesWeb = document.querySelector('.publicacoes-web');
const divEventosWeb = document.querySelector('.eventos-web');


// Define a exibição padrão da seção de publicações para web
divPublicacoesWeb.style.display = 'block';

// Define os manipuladores de evento para os botões
btnPublicacoes.addEventListener('click', function() {
    // Exibe a seção de publicações
    divPublicacoesWeb.style.display = 'block';
    // Oculta a seção de eventos
    divEventosWeb.style.display = 'none';
});

btnEventos.addEventListener('click', function() {
    // Exibe a seção de eventos
    divEventosWeb.style.display = 'flex';
    // Oculta a seção de publicações
    divPublicacoesWeb.style.display = 'none';
});


// Define os manipuladores de evento para os botões
btnPublicacoes.addEventListener('click', function() {
  // Exibe a seção de publicações para dispositivos móveis
  divPublicacoesMobile.style.display = 'block';
  
  // Oculta a seção de eventos para dispositivos móveis
  divEventosMobile.style.display = 'none';
  
});

btnEventos.addEventListener('click', function() {
  // Exibe a seção de eventos para dispositivos móveis
  divEventosMobile.style.display = 'block';
 
  // Oculta a seção de publicações para dispositivos móveis
  divPublicacoesMobile.style.display = 'none';
  
});
