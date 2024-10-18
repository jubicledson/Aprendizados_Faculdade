/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

// Wait for the deviceready event before using any of Cordova's device APIs.
// See https://cordova.apache.org/docs/en/latest/cordova/events/events.html#deviceready
document.addEventListener('deviceready', onDeviceReady, false);

function onDeviceReady() {
    // Cordova is now initialized. Have fun!

    navigator.geolocation.getCurrentPosition(onSuccess, onError);

}

var onSuccess = function(position) {

    const mapa = document.getElementById('mapa');

    const linkMapa = document.getElementById('link');

    var latitudex = position.coords.latitude + 0.0025;      
    var longitudex = position.coords.longitude + 0.0025;    
    var latitudey = position.coords.latitude - 0.0025;  
    var longitudey = position.coords.longitude - 0.0025; 

    var enderecoMapa = 'https://www.openstreetmap.org/export/embed.html?bbox='+ longitudex + '%2C'+ latitudex  + '%2C' + longitudey + '%2C' + latitudey + '&amp;layer=mapnik';

    mapa.src = enderecoMapa;
    linkMapa.href = 'https://www.openstreetmap.org/#map=16/' + position.coords.latitude + '/' + position.coords.longitude;
};

// onError Callback receives a PositionError object
//
function onError(error) {
    alert('code: '    + error.code    + '\n' +
          'message: ' + error.message + '\n');
}
