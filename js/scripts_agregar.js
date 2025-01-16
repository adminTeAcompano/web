// Selección de los elementos del formulario
const rut = document.querySelector("#rut");
const nombre = document.querySelector("#nombre");
const apellido = document.querySelector("#apellido");
const carrera = document.querySelector("#carrera");


// Objeto donde se almacenarán los datos
const datos = {
    rut: "",
    nombre: "",
    apellido: "",
    carrera: ""
};


// Función para actualizar los datos cuando se cambia el valor de un campo
function leerTexto(e) {
    datos[e.target.id] = e.target.value;
    console.log(datos);
}


// Agregar los eventos de input a los campos del formulario
rut.addEventListener("input", leerTexto);
nombre.addEventListener("input", leerTexto);
apellido.addEventListener("input", leerTexto);
carrera.addEventListener("input", leerTexto);


// Selección del formulario
const formulario = document.querySelector(".formulario");


// Evento de submit del formulario
formulario.addEventListener("submit", function(evento) {
    evento.preventDefault(); // Prevenir el envío normal del formulario

    // Desestructuración de los datos
    const { rut, nombre, apellido, carrera } = datos;

    // Validación del rut
    if (/[a-zA-Z]/.test(rut) || (rut.length !== 9 && rut.length !== 8)) {
        mostrarError("Formato de rut incorrecto");
        return;
    }

    // Si la validación es correcta, se muestra el mensaje de éxito
    mostrarEnvio("Se ha agregado correctamente");
});



// Función para mostrar el mensaje de error
function mostrarError(mensaje) {
    const nuevoEnlace = document.createElement("P");
    nuevoEnlace.textContent = mensaje;
    nuevoEnlace.classList.add("error_formato_rut");
    formulario.appendChild(nuevoEnlace);

    // El mensaje de error desaparece después de 3 segundos
    setTimeout(() => {
        nuevoEnlace.remove();
    }, 3000);
}

// Función para mostrar el mensaje de éxito
function mostrarEnvio(mensaje) {
    const nuevoEnlace = document.createElement("P");
    nuevoEnlace.textContent = mensaje;
    nuevoEnlace.classList.add("exito_envio");
    formulario.appendChild(nuevoEnlace);

    // El mensaje de éxito desaparece después de 3 segundos
    setTimeout(() => {
        nuevoEnlace.remove();
    }, 3000);
}







