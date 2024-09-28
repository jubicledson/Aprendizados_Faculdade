document.addEventListener('deviceready', inicia, false);

function inicia() {
    // Cordova is now initialized. Have fun!

    var btn = document.getElementById("btn");

    btn.addEventListener('click', tirarFoto, false);
}

function tirarFoto(){
        
    navigator.camera.getPicture(onSuccess, onFail,
                { quality: 50,
    destinationType: Camera.DestinationType.DATA_URL,
    sourceType: Camera.PictureSourceType.CAMERA,
     });

    
    function onSuccess(imageData) {
        var image = document.getElementById('lugarfoto');
        image.src = "data:image/jpeg;base64," + imageData;
    }
    
    function onFail(message) {
        alert('Failed because: ' + message);
    }  
}