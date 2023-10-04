<style>
    /* Estilos para la caja vacía */
    .caja-vacia {
        display: flex;
        align-items: center;
        justify-items: center;
        width: 200px;
        /* Ancho deseado de la caja */
        height: 300px;
        /* Alto deseado de la caja */
        border: 2px solid #000;
        /* Borde negro de 2 píxeles */
    }

    .margenInferior {
        margin-bottom: 90px;
    }
</style>
<?php
include_once("../config.php");
$pagSeleccionada = "Demo";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once($ESTRUCTURA . "/header.php"); ?>
</head>

<body>
    <?php include_once($ESTRUCTURA . "/cabecera.php"); ?>

    <div class=" margenInferior d-flex  justify-content-center">
        <div class="container  border m-4">
            <div class="row border bg-dark ">
                <div class="d-flex justify-content-center">
                    <h1 class="text-center text-white">Generador de CV</h1>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center  ">
                    <h3 class="text-center mt-2 ">Complete los datos</h3>
                </div>
            </div>
            <div class="container">
                <form name="mailForm" id="mailForm" action="">
                    <div class="mb-3">
                        <label for="emisor" class="form-label fw-bold">Nombre Emisor:</label>
                        <input type="text" class="form-control" id="emisor" name="emisor">
                    </div>
                    <div class="mb-3">
                        <label for="destinatario" class="form-label  fw-bold">Email Destino:</label>
                        <input type="email" class="form-control" id="destinatario" name="destinatario">
                    </div>
                    <div class="mb-3">
                        <label for="asunto" class="form-label fw-bold">Asunto:</label>
                        <input type="text" class="form-control" id="asunto" name="asunto">
                    </div>
                    <!-- input para enviar el pdf -->
                    <input type="file" class="form-control" id="asunto" name="asunto" style="display: none;" value="" >

                    <div class="row">
                        <div class="d-flex justify-content-center my-2 ">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- <script src="./js/validarMail.js"></script> -->
    <script src="<?php echo $JS ?>/validarMail.js"></script>
    <?php include_once($ESTRUCTURA . "/pie.php"); ?>
</body>

</html>