window.onload = iniciar;

function iniciar(){
    document.getElementById("botonsitocr7").addEventListener("click",validar,false);
} 

function validar(item){

    var mensajeError = "";

    var marca = document.getElementById("inputMarca").value;
    var modelo = document.getElementById("inputModelo").value;
    var puertas = document.getElementById("inputPuertas").value;
    var combustible = document.getElementById("inputCombustible").value;

    ///////////////////Validacion marca
    if (marca == ""){
        item.preventDefault();
        mensajeError = mensajeError + " La marca no puede estar vacía.<br>";
        document.getElementById("errores").innerHTML = mensajeError;
    }
    ////////////////////// Validacion modelo
    
    if (modelo == ""){
        item.preventDefault();
        mensajeError = mensajeError + " El modelo no puede estar vacío.<br>";
        document.getElementById("errores").innerHTML = mensajeError;
    }
    ///////////////////// Validacion puerta

    if (puertas == ""){
        item.preventDefault();
        mensajeError = mensajeError + " La marca no puede estar vacía.<br>";
        document.getElementById("errores").innerHTML = mensajeError;
    }
    /////////////////////// Validacion combustible
    
    if (combustible != 0){
        
    }else{
        alert("Elige un combustible.");
        document.getElementById("inputCombustible").focus();
    }
}