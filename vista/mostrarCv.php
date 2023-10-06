<?php
    include_once("../config.php");
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
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <a href="https://www.flaticon.es/iconos-animados-gratis/correo-electronico" title="correo electrónico iconos animados">Correo electrónico iconos animados creados por Freepik - Flaticon</a>
    <a href="https://www.flaticon.es/iconos-animados-gratis/descargar" title="descargar iconos animados">Descargar iconos animados creados por Freepik - Flaticon</a>
    <?php include_once($ESTRUCTURA . "/header.php"); ?>
</head>
<body>
    <?php include_once($ESTRUCTURA . "/cabecera.php"); ?>
    <div class="container-fluid">
        <div class="col-6 p-3 mb-2 container-lg">
            <div class="container-xl">
                <?php                     
                    $curriculum = new Curriculum($nombre, $apellido, $edad, $telefono, $mail, $estudios, $residencia, $expLaboral, $conocimientos, $sobreMi);
                    $nombrePdf = $curriculum -> generarCv();
                ?>
                <embed src="<?php echo "archivos/".$nombrePdf; ?> #toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="600px"/>
            </div>
        </div>
        <div class="col-2 p-3 mb-2 d-lg-flex container-xl" >
            <button class="btn btn-success">Descargar</button>
            <form method="post" name="enviar" id="enviar" action="enviarCorreo.php">
                <input class="btn btn-primary" type="submit" value="Enviar Correo">
                    <!-- Enviar Correo <img src="imagenes/mensaje.gif" alt="" style="width: 25px; height: 25px;"> -->
                <input type="text" value="<?php echo $nombrePdf; ?>" name="nombrePdf" id="nombrePdf" hidden>
            </form>
        </div>
    </div>
    <?php include_once($ESTRUCTURA . "/pie.php"); ?>
    <script src="<?php echo $JS ?>/validar.js"></script>
</body>
</html>