<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba DomPDF</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <p>Prueba para ver el pdf</p>
    <?php
        include_once "domPdf/vendor/autoload.php";
        use Dompdf\Dompdf;

        $dompdf = new Dompdf();
        $options = $dompdf->getOptions();
        $options->setDefaultFont('Courier');
        $dompdf->setOptions($options);
        $dompdf->loadHtml('<h1>Hola mundo</h1><br><a href="https://parzibyte.me/blog">By Parzibyte</a>');
        $dompdf->render();
        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=documento.pdf");
        $dompdf->stream();
    ?>
</body>
</html>