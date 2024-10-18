document.addEventListener('deviceready', onDeviceReady, false);

const target = document.getElementById('target');
const gameArea = document.getElementById('gameArea');
let score = 0;

function onDeviceReady() {
    conseguePosicaoRandomica();
    
}

function conseguePosicaoRandomica() {
  const gameAreaRect = gameArea.getBoundingClientRect();
  const maxX = gameAreaRect.width - target.offsetWidth;
  const maxY = gameAreaRect.height - target.offsetHeight;
  
  const randomX = Math.floor(Math.random() * maxX);
  const randomY = Math.floor(Math.random() * maxY);
  
  return { x: randomX, y: randomY };
}

function moveAlvo() {
  const position = conseguePosicaoRandomica();
  target.style.left = `${position.x}px`;
  target.style.top = `${position.y}px`;
}

target.addEventListener('click', (event) => {
  event.stopPropagation();  
  score++;
  document.getElementById("pontos").innerHTML = "Pontos: " + score;
  navigator.notification.beep(1);
  moveAlvo();
});

gameArea.addEventListener('click', () => {
    alert('Errou! Clique no alvo.');
    navigator.notification.beep(3);
});

function alertDismissed(){
    console.log("Botão apertado");
}
// Inicializar a posição do alvo
moveAlvo();
