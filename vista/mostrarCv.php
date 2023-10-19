<?php
    include_once("../config.php");
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
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <?php include_once($ESTRUCTURA . "/header.php"); ?>
</head>
<body>
    <?php include_once($ESTRUCTURA . "/cabecera.php"); ?>
    <div class="container-fluid">
        <div class="col-6 p-3 mb-2 container-lg">
            <div class="container-xl">
                <h2 class="text-center m-0 pb-3">Vista previa del CV</h2>
                <?php                  
                    $curriculum = new Curriculum ($nombre, $apellido, $edad, $telefono, $mail, $estudios, $residencia, $expLaboral, $conocimientos, $sobreMi, $tipoPlantilla);
                    $nombrePdf = $curriculum -> generarCv();
                ?>
                <embed src="<?php echo "archivos/".$nombrePdf; ?> #toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="600px"/>
            </div>
        </div>
        <div class="col-2 p-3 mb-2 d-lg-flex container-xl">
            <form method="post" name="enviar" id="enviar" action="action/descargarCv.php">
                <input type="text" value="<?php echo $nombre;?>" id="nombre" name="nombre" hidden>
                <input type="text" value="<?php echo $apellido;?>" id="apellido" name="apellido" hidden>
                <input type="text" value="<?php echo $edad;?>" id="edad" name="edad" hidden>
                <input type="text" value="<?php echo $telefono;?>" id="telefono" name="telefono" hidden>
                <input type="text" value="<?php echo $mail;?>" id="mail" name="mail" hidden>
                <input type="text" value="<?php echo $estudios;?>" id="estudios" name="estudios" hidden>
                <input type="text" value="<?php echo $residencia;?>" id="residencia" name="residencia" hidden>
                <input type="text" value="<?php echo $expLaboral;?>" id="expLaboral" name="expLaboral" hidden>
                <input type="text" value="<?php echo $conocimientos;?>" id="conocimientos" name="conocimientos" hidden>
                <input type="text" value="<?php echo $sobreMi;?>" id="sobreMi" name="sobreMi" hidden>
                <input type="text" value="<?php echo $tipoPlantilla;?>" id="tipoPlantilla" name="tipoPlantilla" hidden>
                <input type="text" value="<?php echo $nombrePdf;?>" id="nombrePdf" name="nombrePdf" hidden>
                <input class="btn btn-outline-dark" type="submit" value="Descargar">
            </form>
            <form method="post" name="enviar" id="enviar" action="enviarCorreo.php">
                <input class="btn btn-outline-dark" type="submit" value="Enviar Correo">
                <input type="text" value="<?php echo $nombrePdf;?>" id="nombrePdf" name="nombrePdf" hidden>
            </form>
        </div>
    </div>
    <?php include_once($ESTRUCTURA . "/pie.php"); ?>
    <script src="<?php echo $JS ?>/validar.js"></script>
</body>
</html>