<?php
    include_once("../config.php");
    $pagSeleccionada = "Demo";
?>
<!DOCTYPE html>
<html lang="en">
<head>   
    <link rel="stylesheet" type="text/css" href = "<?php echo $CSS; ?>/estilos.css">
    <?php include_once($ESTRUCTURA."/header.php"); ?>
</head>
<body>
    <?php include_once($ESTRUCTURA."/cabecera.php"); ?>
    <div class="margenInferior d-flex justify-content-center">
        <div class="container border m-4">
            <div class="row border bg-dark ">
                <div class="d-flex justify-content-center">
                    <h1 class="text-center text-white">Generador de CV</h1>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-center">
                    <h3 class="text-center mt-2">Seleccione la plantilla Deseada</h3>
                </div>
            </div>
            <form name="plantillaForm" id="plantillaForm" action="formulario.php">
                <div class="row row-cols-lg-auto">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col  p-3 m-3">
                                <div class="d-flex justify-content-center">
                                    <div class="caja-vacia "></div>
                                </div>
                                    <p>Plantilla 1</p>
                                <div class="form-check d-flex justify-content-center ">
                                    <input class="form-check-input" type="radio" name="tipoPlantilla" id="tipoPlantilla" value="1">
                                </div>
                            </div>
                            <div class="col p-3 m-3">
                                <div class="d-flex justify-content-center">
                                    <div class="caja-vacia "></div>
                                </div>
                                    <p>Plantilla 2</p>
                                <div class="form-check d-flex  justify-content-center  ">
                                    <input class="form-check-input" type="radio" name="tipoPlantilla" id="tipoPlantilla" value="2" checked>
                                </div>
                            </div>
                            <div class="col  p-3 m-3">
                                <div class="d-flex  justify-content-center">
                                    <div class="caja-vacia "></div>
                                </div>
                                <p>Plantilla 3</p>
                                <div class="form-check d-flex justify-content-center ">
                                    <input class="form-check-input" type="radio" name="tipoPlantilla" id="tipoPlantilla" value="3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-center my-2 ">
                       <input type="submit" class="btn btn-outline-dark" value="Seleccionar">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include_once($ESTRUCTURA."/pie.php"); ?>
    <script src="<?php echo $JS; ?>/validarPlantilla.js"></script>
</body>
</html>