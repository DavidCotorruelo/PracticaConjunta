<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Final/css/listado.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <title>Vehículos Encontrados</title>
</head>
<body>
    <header>
        <a href="../Final/concesionario.html"><img class="logo" src="../Final/img/logo.png"></a>
        <span class="enlace1">Sobre nosotros</span>
        <span class="enlace2">Galería</span>
        <span class="enlace3">Contacto</span>
    </header>
    
    <section>
        <article>
            <table id="table">
                <tr>
                    <th>MARCA</th>
                    <th>MODELO</th>
                    <th>PUERTAS</th>
                    <th>COMBUSTIBLE</th>
                    <th>PC</th>
                    <th>MOTORIZACIÓN</th>
                    <th>ELEVALUNAS</th>
                    <th>CIERRE</th>
                    <th>AÑO</th>
                    <th>PINTURA METALIZADA</th>
                    <th>COLOR</th>
                    <th>CAMBIO AUTOMÁTICO</th>
                    <th>PRECIO</th>
                    <th>KM 0</th>
                    <th>FOTO</th>
                </tr>
                
                <?php
                    $conexionBD = mysqli_connect("localhost", "root", "", "prueba_conjunta");
                    $consulta = mysqli_query($conexionBD, "SELECT * FROM autos ");

                    while ($columna = mysqli_fetch_array($consulta, MYSQLI_ASSOC)){
                        echo "<tr>";
                        echo "<td>".$columna["Marca"]."</td>"; 
                        echo "<td>".$columna["Modelo"]."</td>"; 
                        echo "<td>".$columna["Puertas"]."</td>"; 
                        echo "<td>".$columna["Combustible"]."</td>"; 
                        echo "<td>".$columna["Ordenador"]."</td>"; 
                        echo "<td>".$columna["Motorizacion"]."</td>"; 
                        echo "<td>".$columna["Elevalunas"]."</td>"; 
                        echo "<td>".$columna["CierreCentralizado"]."</td>"; 
                        echo "<td>".$columna["AñoMatriculacion"]."</td>"; 
                        echo "<td>".$columna["PinturaMetalizada"]."</td>"; 
                        echo "<td>".$columna["Color"]."</td>"; 
                        echo "<td>".$columna["CambioAutomatico"]."</td>"; 
                        echo "<td>".$columna["PrecioFinal"]."</td>"; 
                        echo "<td>".$columna["KM0"]."</td>"; 
                        echo "<td><a href='".$columna["PathFOTO"]."'>Ver Foto</a></td>"; 
                        echo "</tr>";
                    }
                ?>
            </table>
        </article>
    </section>

    <aside>
        <input type="button" value="NUEVA BUSQUEDAD"/>
    </aside>
</body>
</html>