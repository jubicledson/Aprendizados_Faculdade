document.addEventListener('deviceready', nAleatorio(), false);
var resposta;
var btn = document.getElementById("btn");

function nAleatorio(){
    var formula = document.getElementById("formula");
    

    var listaN = [];
    var rn = 0;
   // navigator.vibrate(3000);
    resposta = 0;

    for(i = 0; i < 3; i++){
        rn = Math.floor(Math.random() * 10);
        listaN.push(rn)
    
    }
    
    if (listaN[1] <= 2){
        formula.innerText = listaN[0] + " + " + listaN[2];
        resposta = listaN[0] + listaN[2];
    }
    else{
        if(listaN[1] > 2 && listaN[1]<= 5){
            formula.innerText = listaN[0] + " - " + listaN[2];
            resposta = listaN[0] - listaN[2];
        }
        else{
            if(listaN[1] > 5 && listaN[1]<= 7){
                formula.innerText = listaN[0] + " * " + listaN[2];
                resposta = listaN[0] * listaN[2];
            }
            else{
                formula.innerText = listaN[0] + " / " + listaN[2];
                resposta = listaN[0] / listaN[2];
            }
        }
    }

    
    resposta
    console.log(resposta);
}

btn.onclick = function () {

    var input = document.getElementById("txtNumero");
    
    if(input.value == resposta){
        
        navigator.notification.alert(
            'Você acertou!',  // message
            alertDismissed,         // callback
            'Fim de Jogo',            // title
            'Ok'                  // buttonName
        );
        console.log("CERTO");
        
    }else{
        
        console.log("ERRADO");
        
    }
    nAleatorio();
};

function alertDismissed(){
    console.log("Botão apertado");
}

