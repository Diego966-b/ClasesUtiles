<?php
    include_once("../config.php");
    $pagSeleccionada = "Demo";
    $colDatos = devolverDatos();
    $nombrePdf = $colDatos ["nombrePdf"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once($ESTRUCTURA . "/header.php"); ?>
    <link rel="stylesheet" type="text/css" href = "<?php echo $CSS; ?>/estilos.css">
</head>
<body>
    <?php include_once($ESTRUCTURA . "/cabecera.php"); ?>
    <div class=" margenInferior d-flex  justify-content-center">
        <div class="container border m-4">
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
                <form method="post" name="mailForm" id="mailForm" action="action/crearCorreo.php">
                    <input type="text" value="<?php echo $nombrePdf; ?>" name="nombrePdf" id="nombrePdf" hidden>
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
                    <div class="row">
                        <div class="d-flex justify-content-center my-2 ">
                            <button type="submit" class="btn btn-outline-dark">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php echo $JS; ?>/validar.js"></script>
    <?php include_once($ESTRUCTURA . "/pie.php"); ?>
</body>
</html>