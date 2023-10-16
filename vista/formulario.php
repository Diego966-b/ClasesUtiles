<?php
    include_once("../config.php");
    $pagSeleccionada = "Demo";
    $colDatos = devolverDatos();
    $tipoPlantilla = $colDatos ["tipoPlantilla"];
?>
<!DOCTYPE html>
<html lang="en">
<head>   
    <?php include_once($ESTRUCTURA."/header.php"); ?>
</head>
<body>
    <?php include_once($ESTRUCTURA."/cabecera.php"); ?>
    <form method="post" name="formDatosParaCv" id="formDatosParaCv" action="mostrarCv.php">
        <div class="container mb-3">
            <h2 class="text-center m-0 py-2">Ingrese sus datos para generar el CV</h2>
            <!-- Nombre: -->
            <label for="nombre" class="form-label">Nombres:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" aria-describedby="nombreHelp">
            <div id="nombreHelp" class="form-text">Incluya todos sus nombres.</div>
            <!-- Apellido: -->
            <label for="apellido" class="form-label">Apellidos:</label>
            <input type="text" id="apellido" name="apellido" class="form-control" aria-describedby="apellidoHelp">
            <div id="apellidoHelp" class="form-text">Incluya todos sus apellidos.</div>
            <!-- Edad: -->
            <label for="edad" class="form-label">Edad:</label>
            <input type="number" id="edad" name="edad" class="form-control">
            <!-- Telefono: -->
            <label for="telefono" class="form-label">Telefono:</label>
            <input type="number" id="telefono" name="telefono" class="form-control">
            <!-- Mail: -->
            <label for="mail" class="form-label">Mail:</label>
            <input type="email" id="mail" name="mail" class="form-control">
            <!-- Estudios: -->
            <label for="estudios" class="form-label">Estudios:</label>
            <textarea class="form-control" id="estudios" name="estudios" rows="3" ></textarea>
            <!-- Residencia: -->
            <label for="residencia" class="form-label">Residencia:</label>
            <input type="text" id="residencia" name="residencia" class="form-control">
            <!-- Experiencia laboral: -->
            <label for="expLaboral" class="form-label">Experiencia laboral:</label>
            <textarea class="form-control" id="expLaboral" name="expLaboral" rows="3"></textarea>
            <!-- Conocimientos: -->
            <label for="conocimientos" class="form-label">Conocimientos:</label>
            <input type="text" id="conocimientos" name="conocimientos" class="form-control">
            <!-- Sobre mi: -->
            <label for="sobreMi" class="form-label">Sobre mi:</label>
            <textarea class="form-control" id="sobreMi" name="sobreMi" rows="3"></textarea>
            <br>
            <div class="text-center">
                <input type="submit" name="enviar" id="enviar" value="Enviar" class="btn btn-outline-dark">
                <input type="reset" name="reiniciar" id="reiniciar" value="Reiniciar" class="btn btn-outline-dark">
            </div>
            <!-- Input oculto del tipo de plantilla -->
            <input hidden type="text" name="tipoPlantilla" id="tipoPlantilla" value="<?php echo $tipoPlantilla;?>">
            <br><br><br><br><br>
        </div>
    </form>
    <?php include_once($ESTRUCTURA."/pie.php"); ?>
    <script src="<?php echo $JS; ?>/validar.js"></script>
</body>