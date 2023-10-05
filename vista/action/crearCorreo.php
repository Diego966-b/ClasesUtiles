<?php
    include_once("../../config.php");
    $colDatos = devolverDatos();
    $emisor = $colDatos ["emisor"];
    $asunto = $colDatos ["asunto"];
    $destinatario = $colDatos ["destinatario"];
    $nombrePdf = $colDatos ["nombrePdf"];
    echo $emisor;
    echo "<br>";
    echo $asunto;
    echo "<br>";
    echo $destinatario;
    echo "<br>";
    echo $nombrePdf;
    echo "<br>";
    $objCorreo = new Correo($emisor, $destinatario, $asunto, $nombrePdf);
    $exito = $objCorreo -> enviarCorreo();
    if ($exito)
    {
        echo "enviado";
    }
?>