window.onload = iniciar;

function iniciar() {
    document.getElementById("btnEnviar").addEventListener("click", validar, false);


    function validar(item) {

        var mensajeError = "";
        var todoCorrecto = true;

        var marca = document.getElementById("inputMarca").value;
        var modelo = document.getElementById("inputModelo").value;
        var puertas = document.getElementById("inputPuertas").value;
        var motorizacion = document.getElementById("inputMotorizacion").value;
        var color = document.getElementById("inputColor").value;
        var precio = document.getElementById("inputPrecio").value;
        var foto = document.getElementById("inputFoto").value;

        ///////////////////Validacion marca
        if (marca == "") {
            item.preventDefault();
            mensajeError = mensajeError + " La marca no puede estar vacía.<br>";
            document.getElementById("errores").innerHTML = mensajeError;
            todoCorrecto = false;
        }
        ////////////////////// Validacion modelo

        if (modelo == "") {
            item.preventDefault();
            mensajeError = mensajeError + " El modelo no puede estar vacío.<br>";
            document.getElementById("errores").innerHTML = mensajeError;
            todoCorrecto = false;
        }
        ///////////////////// Validacion puerta

        if (puertas == "" || puertas < 2 || puertas > 7) {
            item.preventDefault();
            mensajeError = mensajeError + " Las puertas deben estar entre 2 y 7 y el campo no puede estar vacío.<br>";
            document.getElementById("errores").innerHTML = mensajeError;
            todoCorrecto = false;
        }
        /////////////////////// Validacion motorización

        if (motorizacion == "") {
            item.preventDefault();
            mensajeError = mensajeError + " La motorización no puede estar vacía.<br>";
            document.getElementById("errores").innerHTML = mensajeError;
            todoCorrecto = false;
        }
        /////////////////////// Validacion color

        if (color == "") { //MIRAR ESTO DA FALLO
            item.preventDefault();
            mensajeError = mensajeError + " El color no puede estar vacío y no puede contener números.<br>";
            document.getElementById("errores").innerHTML = mensajeError;
            todoCorrecto = false;
        }

        /////////////////////// Validacion precio final
        if (precio == "") {
            item.preventDefault();
            mensajeError = mensajeError + "El precio no puede estar vacío.<br>";
            document.getElementById("errores").innerHTML = mensajeError;
            todoCorrecto = false;
        }

        if (precio.includes(",")) {
            item.preventDefault();
            mensajeError = mensajeError + "No puede contener coma como separador.<br>";
            document.getElementById("errores").innerHTML = mensajeError;
            todoCorrecto = false;
        }

        /////////////////////// Validacion foto
        if (foto == "") {
            item.preventDefault();
            mensajeError = mensajeError + "Debe incluir una URL para la foto.<br>";
            document.getElementById("errores").innerHTML = mensajeError;
            todoCorrecto = false;
        }

        if (!todoCorrecto) {
            alert("Ha ocurrido un error durante el envío del formulario");
        }

    }
}