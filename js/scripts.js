

// Generar un nuevo enlace
const nuevoEnlace = document.createElement("A");

//agregar href
nuevoEnlace.href ="nuevo-enlance.html";
//agregar texto
nuevoEnlace.textContent = "Enviar";

//agregar clase
nuevoEnlace.classList.add("navegacion_enlance");
//console.log(nuevoEnlace)

//agregar id
nuevoEnlace.id="btEnviar";
//console.log(nuevoEnlace)
/*
//Agregar al documento 
const navegacion =document.querySelector("#nav");
navegacion.appendChild(nuevoEnlace);
*/

//EVENTOS

//console.log(1);
window.addEventListener("load",function(){ //cuando termina de cargar la pagina se ejecuta
    //console.log(2);
})

document.addEventListener("DOMContentLoaded",function(){ //aca solo espera a que se descargue el html
   // console.log(4)
})







