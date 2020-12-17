<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Buscador</title>
</head>
<header>
    <a href="concesionario.html"><img class="logo" src="img/logo.jpg"></a>
    <span class="enlace1">Sobre nosotros</span>
    <span class="enlace2">Galería</span>
    <span class="enlace3">Contacto</span>
</header>

<body>
    <h1 class="h1">Introducir Vehículo</h1>
    <hr>
    <br>
    <form class="formulario" method="POST">
        <label for="marca">Marca:</label>
        <input class="camposRellenar" type="text" id="inputMarca" name="marca"><br><br>
        <label for="modelo">Modelo:</label>
        <input class="camposRellenar" type="text" id="inputModelo" name="modelo"><br><br>
        <label for="puertas">Puertas:</label>
        <input class="camposRellenar" type="text" id="inputPuertas" name="puertas"><br><br>
        <!---->
        <label for="combustible">Combustible:</label>
        <select name="combustible" id="inputCombustible">
            <!---->
            <option value="1">Gasolina</option>
            <option value="0">Diesel</option>
        </select>
        <br>
        <br>
        <label for="motorizacion">Motorización:</label>
        <input class="camposRellenar" type="number" id="inputMotorizacion" name="motorizacion"><br>
        <br>
        <label for="matriculacion">Año matriculación:</label>
        <input class="camposRellenar" type="date" id="inputMatriculacion" name="matriculacion"><br><br>

        <label for="color">Color:</label>
        <input class="camposRellenar" type="text" id="inputColor" name="color"><br><br>
        <label for="precio">Precio final:</label>
        <input class="camposRellenar" type="text" id="inputPrecio" name="precio"><br><br>
        <label for="path">URL Foto:</label>
        <input class="camposRellenar" type="file" id="inputFoto" name="path"><br>
        <br>
        <br>
        <span class="radios">Elevalunas:</span>
        <input type="radio" id="eleva" name="ele" value="1" checked> Si
        <input type="radio" id="eleva" name="ele" value="0"> No
        <br><br>
        <span class="radios">Cierre centralizado:</span>
        <input type="radio" id="cierre" name="cie" value="1" checked> Si
        <input type="radio" id="cierre" name="cie" value="0"> No
        <br><br>
        <span class="radios">Pintura metalizada:</span>

        <input type="radio" id="pintura" name="pin" value="1" checked> Si
        <input type="radio" id="pintura" name="pin" value="0"> No

        <br><br>
        <span class="radios">Cambio automático:</span>

        <input type="radio" id="cambio" name="cam" value="1" checked> Si
        <input type="radio" id="cambio" name="cam" value="0"> No

        <br><br>
        <span class="radios">KM 0: </span>


        <input type="radio" id="km" name="kil" value="1" checked> Si
        <input type="radio" id="km" name="kil" value="0"> No

        <br><br>
        <span class="radios">Ordenador:</span>
        <input type="radio" id="ordenador" name="ord" value="1" checked> Si
        <input type="radio" id="ordenador" name="ord" value="0"> No
        <br><br><br>
        <button id="btnEnviar" class="botonsitocr7" type="submit" value="Buscar">Buscar</button>
    </form>
    <div id="errores"></div>
    <br><br>
    <br><br>
    <footer>Concesionario creado por los alumnos de 2º de DAW.</footer>
    <script src="js/validaBusqueda.js"></script>
</body>


<?php
    if (isset($_POST["submit"])) {

        $Marca = $_POST['marca'];
        $Modelo = $_POST['modelo'];
        $Puertas = $_POST['puertas'];
        $Combustible = $_POST['combustible'];
        $Ordenador = $_POST['ord'];
        $Motorizacion = $_POST['motorizacion'];
        $Elevalunas = $_POST['ele'];
        $CierreCentralizado = $_POST['cie'];
        $AñoMatriculacion = $_POST['matriculacion'];
        $PinturaMetalizada = $_POST['pin'];
        $Color = $_POST['color'];
        $CambioAutomatico = $_POST['cam'];
        $PrecioFinal = (Float) $_POST['precio'];
        $KM0 = $_POST['kil'];
        $PathFOTO = $_POST['path'];

        $conexionBD = mysqli_connect("localhost", "root", "", "prueba_conjunta");

        $SQL = "INSERT INTO autos (ID, Marca, Modelo, Puertas, Combustible, Ordenador, Motorizacion, Elevalunas, CierreCentralizado, AñoMatriculacion, PinturaMetalizada, Color, CambioAutomatico, PrecioFinal, KM0, PathFOTO) VALUES (null, '$Marca', '$Modelo', $Puertas, $Combustible, $Ordenador, $Motorizacion, $Elevalunas, $CierreCentralizado, $AñoMatriculacion, $PinturaMetalizada, '$Color', $CambioAutomatico, $PrecioFinal, $KM0, '$PathFOTO')";

        mysqli_query($conexionBD, $SQL);
    }
?>

</html>

</html>