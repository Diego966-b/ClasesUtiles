<?php
    include_once("../config.php");
    $pagSeleccionada = "Informe";
?>
<!DOCTYPE html>
<html lang="en">
<head>   
    <?php include_once($ESTRUCTURA."/header.php"); ?>
</head>
<body>
    <?php include_once($ESTRUCTURA."/cabecera.php"); ?>

    <h1 class="text-center">Informe</h1>
    <a href = "https://docs.laminas.dev/laminas-mail/" target="_blank">Documentacion de laminas-mail</a> 
    <br>
    <a target="_blank">Documentacion de dompdf</a>
    <br>
    <a href="https://github.com/laminas/laminas-mail" target="_blank">Github de laminas-mail</a>
    <br>
    <a href="https://github.com/dompdf/dompdf" target="_blank">Github de domPdf</a>
    <br>
    <?php include_once($ESTRUCTURA."/pie.php"); ?>
    <script src="<?php echo $JS?>/validar.js"></script>
</body>
</html>