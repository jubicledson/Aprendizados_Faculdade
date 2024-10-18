document.addEventListener('deviceready', onDeviceReady, false);
var claro = false;
var i = 0;
function onDeviceReady() {
    var botao = document.getElementById('botao');
    botao.addEventListener('click', mudaTema);
}

function mudaTema() {
    navigator.notification.confirm(
    'You are the winner!', // message
     finalizado,            // callback to invoke with index of button pressed
    'Game Over',           // title
    ['Mudar Cor','Sair']     // buttonLabels
    );
}

function finalizado(buttonIndex) {
    var colorArray = ['bg-warning','bg-secondary','bg-success','bg-danger','bg-primary','bg-info','bg-light','bg-dark'];

    if(buttonIndex == 1){
        var body = document.body
        if(i >= 7){
            i = -1;
            body.classList.remove(colorArray[7]);
        }
        console.log(i);
        body.classList.remove(colorArray[i]);
        i++;
        body.classList.add(colorArray[i]);
        
    }
    
    console.log('Botao: ' + buttonIndex);
}