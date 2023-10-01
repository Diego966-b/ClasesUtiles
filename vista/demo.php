<?php
    include_once("../config.php");
    $pagSeleccionada = "Demo";
?>
<!DOCTYPE html>
<html lang="en">
<head>   
    <?php include_once($ESTRUCTURA."/header.php"); ?>
</head>
<body>
    <?php include_once($ESTRUCTURA."/cabecera.php"); ?>

    <h1 class="text-center">Demo</h1>

    <?php include_once($ESTRUCTURA."/pie.php"); ?>
    <script src="<?php echo $JS?>/validar.js"></script>
</body>
</html>