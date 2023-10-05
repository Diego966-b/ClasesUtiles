<?php
    include_once("../../config.php");
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
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();

    
    
    $options = $dompdf->getOptions();

    //$options->setRootDir('ClasesUtiles\vista\archivos');
    //$dompdf->setOptions($options);
    
    
    /*
    $wireTempDir = files()->tempDir('test');
    file_put_contents($wireTempDir . '/temp.pdf', $output);
    */

    ob_start();
    include "../plantillaCv/plantilla.php";
    print_r($options);
    $html = ob_get_clean();
    
    $dompdf->loadHtml($html);
    $dompdf->render();
    
    header("Content-type: application/pdf");
    //header('Content-Disposition: attachment; filename="downloaded.pdf"'); descargar
    header("Content-Disposition: inline; filename=documento.pdf");
    
    //$dompdf->stream();
    echo $dompdf->output();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>a</p>
</body>
</html>