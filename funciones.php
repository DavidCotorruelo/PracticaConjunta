<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
               
          define("MYSQL_CONN_ERROR","No se puede conectar a la Base de Datos");

          function conexion($nombreHost, $usuario, $contraseña){
          $nombreConexion = mysqli_connect($nombreHost, $usuario, $contraseña);

          return $nombreConexion;
          }

          function cerrarConexion($nomConexion){
          $cerrarConexion = mysqli_close($nomConexion);

          return $cerrarConexion;
          }

           function seleccionarBaseDatos($link, $nomBaseDatos){
             $conexionBD = mysqli_select_db($link, $nomBaseDatos);

             return $conexionBD;
          }

          $nombreHost = "localhost";
          $usuario = "root";
          $contraseña = "";
          $nomBaseDatos = "coches";


          $conect = conexion($nombreHost, $usuario, $contraseña);

          $conectBD = seleccionarBaseDatos($conect, $nomBaseDatos);


          if ($conect){
          echo "Conexion al servidor correcta";
          }else{
          echo "No se ha conectado al servidor";
          }

          echo "<br>";

          if ($conectBD){
          echo "Base de datos elegida correctamente";
          }else{
          echo "No se ha elegido la base de datos correctamente";
          }
         
         
          echo "<br>";
         
          function crearArrayInsert(){
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $puerta = $_POST['puertas'];
            $combustible = $_POST['combustible'];
            $ordenador = $_POST['ord'];
            $motorizacion = $_POST['motorizacion'];
            $elevalunas = $_POST['ele'];
            $cierre = $_POST['cie'];
            $añoMatricula = $_POST['matriculacion'];
            $tipoPintura = $_POST['pin'];
            $color = $_POST['color'];
            $cambio = $_POST['cam'];
            $precioFinal = $_POST['precio'];
            $kilometro0 = $_POST['kil'];
            $pathFoto = $_POST['path'];
         
         
            $arrayInsert = array(
                  $marca, $modelo, $puerta, $combustible, $ordenador, $motorizacion,$elevalunas, $cierre, $añoMatricula, $tipoPintura, $color, $cambio, $precioFinal, $kilometro0, $pathFoto
            );
         
            return $arrayInsert;
          }
         
          function insertar($arrayInsert){
              $sql = "INSERT INTO autos(Marca, Modelo, Puertas, Combustible, Ordenador, Motorizacion, Elevalunas, CierreCentralizado, AñoMatriculacion, PinturaMetalizada, Color, CambioAutomatico, PrecioFinal, KM0, PathFOTO) VALUES ($arrayInsert[0],$arrayInsert[1],$arrayInsert[2],$arrayInsert[3],3 ,$arrayInsert[5],1,$arrayInsert[7],$arrayInsert[8],$arrayInsert[9],$arrayInsert[10],$arrayInsert[11],$arrayInsert[12],$arrayInsert[13],$arrayInsert[14])";
             
              $resultConsulta = mysqli_query(conexion("localhost", "root", ""), $sql);
             
              if ($resultConsulta) {
                  echo "Se ha realizado la inserción con exito";
              }else{
                  echo "No se ha insertado correctamente";
              }
          }
         
          insertar(crearArrayInsert());
         
          /*
          $array = crearArrayInsert();
         
          for ($index = 0; $index < count($array); $index++) {
             
              echo "<br>";
              echo $array[$index];
          }
          */
         
          //$sql = "insert into autos(ID, Marca, Modelo, Puertas, Combustible, Ordenador, Motorizacion, Elevalunas, CierreCentralizado, AñoMatriculacion, PinturaMetalizada, Color, CambioAutomatico, PrecioFinal, KM0) VALUES ()"
        //QUERYS
          /*
         
       
          $extraido = mysqli_fetch_array($resultConsulta);
         
          //echo "- ID: ".$extraido['ID']."<br/>";
          //echo "- MARCA: ".$extraido['Marca']."<br/>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
         
         
         
         
         
         
                 
                 
                 
                 
          echo "Marca: " .$marca;
          echo "<br>";
          echo "modelo: " .$modelo;
          echo "<br>";
          echo "puerta: " . $puerta;
          echo "<br>";
          echo "combustible: " .$combustible;
          echo "<br>";
          echo "ordenador: " .$ordenador;
          echo "<br>";
          echo "motorizacion: " .$motorizacion;
          echo "<br>";
          echo "elevalunas: " .$elevalunas;
          echo "<br>";
          echo "cierre: " .$cierre;
          echo "<br>";
          echo "añoMatricula: " .$añoMatricula;
          echo "<br>";
          echo "tipoPintura: " .$tipoPintura;
          echo "<br>";
          echo "color: " .$color;
          echo "<br>";
          echo "cambio: " .$cambio;
          echo "<br>";
          echo "precioFinal: " .$precioFinal;
          echo "<br>";
          echo "kilometro0: " .$kilometro0;
          echo "<br>";
          echo "pathFoto: " .$pathFoto;
          */
         
         
         
        ?>