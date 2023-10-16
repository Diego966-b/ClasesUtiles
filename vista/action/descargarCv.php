<?php
    include_once("../../config.php");
    $pagSeleccionada = "Demo";
    $colDatos = devolverDatos();
    $nombre = $colDatos ["nombre"];
    $apellido = $colDatos ["apellido"];
    $edad = $colDatos ["edad"];
    $telefono = $colDatos ["telefono"];
    $mail = $colDatos ["mail"];
    $estudios = $colDatos ["estudios"];
    $residencia = $colDatos ["residencia"];
    $expLaboral = $colDatos ["expLaboral"];
    $conocimientos = $colDatos ["conocimientos"];
    $sobreMi = $colDatos ["sobreMi"];
    $tipoPlantilla = $colDatos["tipoPlantilla"];
    $nombreCv = $colDatos ["nombrePdf"];
    if (isset($nombreCv)) {
        $curriculum = new Curriculum($nombre, $apellido, $edad, $telefono, $mail, $estudios, $residencia, $expLaboral, $conocimientos, $sobreMi, $tipoPlantilla);
        $curriculum -> descargarCv($nombreCv);
    } else {
        echo 'Error';
    }
?>