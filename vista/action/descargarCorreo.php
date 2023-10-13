<?php
    include_once("../../config.php");
    $colDatos = devolverDatos();
    print_r($colDatos);
    $curriculum = $colDatos ["curriculum"];
    $pagSeleccionada = "Demo";
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <?php include_once($ESTRUCTURA."/header.php"); ?>
</head>
<body>
    <?php include_once($ESTRUCTURA."/cabecera.php"); ?>
    <?php include_once($ESTRUCTURA."/pie.php"); ?>
    <?php print_r($curriculum);$curriculum->decargarCorreo();?>
</body>