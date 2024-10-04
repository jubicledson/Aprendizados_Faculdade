function carregou(){
    var txtEstado = document.getElementById('estado');
    txtEstado.innerHTML = 'A pagina carregada';

    document.addEventListener('deviceready', dispositivoPronto, true);
    document.addEventListener('pause', pausado, true);
    document.addEventListener('resume', retorno, true);

}

function dispositivoPronto(){
    var txtEstado = document.getElementById('estado');
    txtEstado.innerHTML += '<br>O Dispositivo está pronto!';
}

function pausado(){
    var txtEstado = document.getElementById('estado');
    txtEstado.innerHTML += '<br>Pausa!';
}

function retorno(){
    var txtEstado = document.getElementById('estado');
    txtEstado.innerHTML += '<br>Retorno!';
}
