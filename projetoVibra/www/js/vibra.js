document.addEventListener('deviceready', vibra(), true);
var resposta;
var btn = document.getElementById("btn");
function vibra(){
    var form = document.getElementById('formulario');
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

    var input = document.getElementById("txtNumber");
    
    if(input.value == resposta){
        navigator.vibrate(2000);
        //console.log("CERTO");
        
    }else{
        navigator.vibrate(1000);
        //console.log("ERRADO");
        
    }
    vibra();
};

