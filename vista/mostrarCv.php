<?php
    include_once("../config.php");
    $pagSeleccionada = "Mostrar CV";
?>

<!DOCTYPE html>
<html lang="en">
<a href="https://www.flaticon.es/iconos-animados-gratis/descargar" title="descargar iconos animados">Descargar iconos animados creados por Freepik - Flaticon</a>
<a href="https://www.flaticon.es/iconos-animados-gratis/correo-electronico" title="correo electrónico iconos animados">Correo electrónico iconos animados creados por Freepik - Flaticon</a>

<head>
    <?php include_once($ESTRUCTURA . "/header.php"); ?>
</head>

<body>
    <?php include_once($ESTRUCTURA . "/cabecera.php"); ?>
    <div class="container-fluid">
        <div class="col p-2 mb-2">
            <div class="container-cv container-lg">
                <?php include_once("action/crearCv.php");?>
                <embed src="<?php echo "archivos/".$nombrePdf; ?> #toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="600px"/>
            </div>
        </div>
         <section class="col-sm-3 p-2">
            <div>
                <button class="btn btn-success">Descargar
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z" />
                        <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                    </svg>
                </button>
                <form method="post" name="enviar" id="enviar" action="enviarCorreo.php">
                    <input class="btn btn-primary" type="submit" value="Enviar Correo">
                        <!-- Enviar Correo <img src="imagenes/mensaje.gif" alt="" style="width: 25px; height: 25px;"> -->
                    <input type="text" value="<?php echo $nombrePdf?>" name="nombrePdf" id="nombrePdf" hidden>
                </form>
            </div>
        </section>
    </div>

    <?php include_once($ESTRUCTURA . "/pie.php"); ?>
    <script src="<?php echo $JS ?>/validar.js"></script>
    <style>
        .container-cv {
            background-color: gray;
        }
    </style>
</body>

</html>