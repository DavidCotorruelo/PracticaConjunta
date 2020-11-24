<?php
function pintaDatos($datos){
    while ($fila = @mysql_fetch_array($datos)) {
        $codigoHTML = "<tr>";
        $codigoHTML .= "<td>".utf8_encode($fila["marca"])."</td>";
        $codigoHTML .= "<td>".utf8_encode($fila["modelo"])."</td>";
        $codigoHTML .= "<td>".utf8_encode($fila["puertas"])."</td>";
        $codigoHTML .= "<td>".utf8_encode($fila["combustible"])."</td>";
        $codigoHTML .= "<td>".utf8_encode($fila["ordenador"])."</td>";
        $codigoHTML .= "<td>".utf8_encode($fila["motorizacion"])."</td>";
        $codigoHTML .= "<td>".utf8_encode($fila["elevalunas"])."</td>";
        $codigoHTML .= "<td>".utf8_encode($fila["cierre"])."</td>";
        $codigoHTML .= "<td>".utf8_encode($fila["año"])."</td>";
        $codigoHTML .= "<td>".utf8_encode($fila["pinturametalizada"])."</td>";
        $codigoHTML .= "<td>".utf8_encode($fila["color"])."</td>";
        $codigoHTML .= "<td>".utf8_encode($fila["cambioautomatico"])."</td>";
        $codigoHTML .= "<td>".utf8_encode($fila["precio"])."</td>";
        $codigoHTML .= "<td>".utf8_encode($fila["km"])."</td>";
        $codigoHTML .= "<td><a href=".utf8_encode($fila["foto"]).">Ver Foto </a></td>";
        $codigoHTML = "</tr>";
    }

    return $codigoHTML;
}