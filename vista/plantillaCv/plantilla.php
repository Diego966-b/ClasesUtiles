<?php
    include_once("../../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * { color:red; }
    </style>
</head>
<body>
    <div class="fw-bold">
        <p class="text-danger"> Nombre: <?php echo $nombre; ?></p>
        <?php 
            echo "<div class='text-info'>";
            echo "<p>";
            echo "Nombre: ".$nombre;
            echo "<br>";
            echo "Apellido: ".$apellido;
            echo "<br>";
            echo "Edad: ".$edad;
            echo "<br>";
            echo "Telefono: ".$telefono;
            echo "<br>";
            echo "Mail: ".$mail;
            echo "<br>";
            echo "Estudios: ".$estudios;
            echo "<br>";
            echo "Residencia: ".$residencia;
            echo "<br>";
            echo "Experiencia laboral:".$expLaboral;
            echo "<br>";
            echo "Conocimientos: ".$conocimientos;
            echo "<br>";
            echo "Sobre Mi: ".$sobreMi;
            echo "</p>";
            echo "</div>";
        ?>
    </div>
</body>
</html>