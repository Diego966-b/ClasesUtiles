<?php
    include_once("../config.php");
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
    use Dompdf\Option;
    use Dompdf\Exception as DomException;
    use Dompdf\Options;
    try 
    {
        ob_start();
        include "plantillaCv/plantilla.php";
        $contenido = ob_get_clean();

        $nombrePdf = $nombre."-".$apellido."CV.pdf";

        // Opciones para prevenir errores con carga de imágenes
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        // Instancia de la clase
        $dompdf = new Dompdf($options);
        // Cargar el contenido HTML
        $dompdf->loadHtml($contenido);
        // Formato y tamaño del PDF
        $dompdf->setPaper('A4', 'portrait');
        // Renderizar HTML como PDF
        $dompdf->render();
        // Salida para descargar
        
        // $dompdf->stream($nombrePdf . ".pdf", ['Attachment' => false]); Muestra el PDF
        // $dompdf->stream($nombrePdf . ".pdf", ['Attachment' => true]); Descarga el PDF

        // Guardar el PDF en un archivo
        $archivoPdf = $dompdf->output();
        $ubicacionPdf = 'archivos/' . $nombrePdf;
        file_put_contents($ubicacionPdf, $archivoPdf);
    } 
    catch (Exception $e) 
    {
        // Otros errores
        echo "Error";
    } 
    catch (DomException $e) 
    {
        // Error domPdf
        echo "Error DOMPDF";
    };
?> 
