<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

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

    </body>
</html>
