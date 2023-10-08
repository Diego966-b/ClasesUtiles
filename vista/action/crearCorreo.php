<?php
    include_once("../../config.php");
    $pagSeleccionada = "Demo";
    $colDatos = devolverDatos();
    $emisor = $colDatos ["emisor"];
    $asunto = $colDatos ["asunto"];
    $destinatario = $colDatos ["destinatario"];
    $nombrePdf = $colDatos ["nombrePdf"];
    $objCorreo = new Correo($emisor, $destinatario, $asunto, $nombrePdf);
    $resultado = $objCorreo -> enviarCorreo();
    $exito = $resultado ["exito"];
    $mensajeError = $resultado ["mensajeError"];
    echo '
    <!DOCTYPE html>
    <html lang="en">
        <head>';
    include_once($ESTRUCTURA."/header.php");
    echo '
        </head>
        <body>';
    include_once($ESTRUCTURA."/cabecera.php");
    if ($exito == "errorGeneral")
    {
        echo '
            <div class="bg-danger">
                <p class="fs-5 text-center p-3">Error</p>
            </div>
            <div class="col">
                <div class="row">
                    <p class="fs-5">Mensaje de error:</p>
                    <p>'.$mensajeError.'</p>
                </div>
                <div class="row">
                    <p class="fs-5"><a class="link-offset-2 link-underline link-underline-opacity-0" href="' . $VISTA . '/home/index.php">Volver al inicio</a></p>
                </div>
            </div>';
    }
    elseif ($exito == "errorLaminas")
    {
        echo '
            <div class="bg-danger">
                <p class="fs-5 text-center p-3">Error de laminas-mail</p>
            </div>
            <div class="col">
                <div class="row">
                    <p class="fs-5">Mensaje de error:</p>
                    <p>'.$mensajeError.'</p>
                </div>
                <div class="row">
                    <p class="fs-5"><a class="link-offset-2 link-underline link-underline-opacity-0" href="' . $VISTA . '/home/index.php">Volver al inicio</a></p>
                </div>
            </div>';
    }
    elseif ($exito == "si")
    {
        echo '
            <div class="bg-success">
                <p class="fs-5 text-center p-3">El mail se envió con éxito</p>
            </div>
            <div class="col">
                <div class="row">
                    <p class="fs-5">Datos del mail:</p>
                    <p>Emisor: ' . $emisor . '</p>
                    <p>Asunto: ' . $asunto . '</p>
                    <p>Destinatario: ' . $destinatario . '</p>
                    <p class="fs-5"><a class="link-offset-2 link-underline link-underline-opacity-0" href="' . $VISTA . '/home/index.php">Volver al inicio</a></p>
                </div>
            </div>';
    }
    include_once($ESTRUCTURA."/pie.php");
    echo '
        </body>
    </html>';
?>