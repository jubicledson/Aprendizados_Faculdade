
let isLoading = false;
let divPrincipal = document.getElementById("divPrincipal");
window.onload = function(){
    document.addEventListener('deviceready', qndTiverPronto(), false);
}

async function loadCards(titulo, image) {
    if (isLoading) return;  // Prevenir múltiplos carregamentos simultâneos
    isLoading = true;

    const divContainer = document.createElement('div');
    divContainer.classList.add("container-fluid");

    const divCard = document.createElement('div');
    divCard.classList.add('card');
    const img = document.createElement('img');
    img.classList.add('card-img-top');
    img.setAttribute('src', image);
    img.setAttribute('id', 'imagem');
    const divCardBody = document.createElement('div');
    divCardBody.classList.add('card-body');
    const cardTitle = document.createElement('h5');
    cardTitle.setAttribute('id', 'title');
    cardTitle.innerText = titulo;
    cardTitle.classList.add('card-text');

    divContainer.appendChild(divCard);
    divCard.appendChild(img);
    divCard.appendChild(divCardBody);
    divCardBody.appendChild(cardTitle);
    //divCard.innerHTML = `
    //    <img src="${image}">
    //     <h2>${titulo}</h2>
    //`;

    document.body.insertBefore(divCard, divPrincipal);
    isLoading = false;
}

function qndTiverPronto() {
    
    for (var i = 0; i < 3; i++){

        var idR = randomNumber();

        var endereco = 'https://jsonplaceholder.typicode.com/albums/1/photos?id=' + idR;

        var xhttp = new XMLHttpRequest();

        xhttp.onload = function() {
            var objRecebido = JSON.parse(this.responseText);
            var titulo = objRecebido[0].title;
            var image = objRecebido[0].url;
            console.log(image);
            loadCards(titulo, image);
            

        }
        
        xhttp.open('GET', endereco, true);
        xhttp.send();
        
    }
    
}

function randomNumber() {
    var idRandom = Math.floor(Math.random() * 51);
    if (idRandom === 0) {
        return randomNumber();
    }
    console.log(idRandom);
    return idRandom;
}

window.addEventListener('scroll', () => {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 100 && !isLoading) {
        qndTiverPronto();
       
        
    }
});
