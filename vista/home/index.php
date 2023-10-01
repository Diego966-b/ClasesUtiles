<?php
    include_once("../../config.php");
    $pagSeleccionada = "Home";
?>
<!DOCTYPE html>
<html lang="en">
<head>   
    <!-- Redirecciona al informe: -->
    <meta http-equiv="refresh" content="0; url='<?php echo $VISTA?>/informe.php'"/>       
    <?php include_once($ESTRUCTURA."/header.php"); ?>
</head>
<body>
    <?php include_once($ESTRUCTURA."/cabecera.php"); ?>
    <?php include_once($ESTRUCTURA."/pie.php"); ?>
    <script src="<?php echo $JS?>/validar.js"></script>
</body>
</html>