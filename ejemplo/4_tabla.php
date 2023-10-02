<?php
include_once "../clases/domPdf/vendor/autoload.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
ob_start();
include "./tabla.php";
$html = ob_get_clean();
$dompdf->loadHtml($html);
$dompdf->render();
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=documento.pdf");
$dompdf->stream();