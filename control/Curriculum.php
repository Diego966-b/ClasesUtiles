<?php
if (file_exists("../../config.php"))
{
    include_once ("../../config.php");
}
elseif (file_exists("../config.php"))
{
    include_once ("../config.php");
}
use Dompdf\Dompdf;
use Dompdf\Option;
use Dompdf\Exception as DomException;
use Dompdf\Options;
class Curriculum
{
    
    // Atributos

    private $nombre, $apellido, $edad, $telefono, $mail, $estudios, $residencia, $expLaboral, $conocimientos, $sobreMi, $tipoPlantilla;

    // Métodos 
    
    /**
     * Recibe los valores iniciales para los atributos
     */
    public function __construct($nombre, $apellido, $edad, $telefono, $mail, $estudios, $residencia, $expLaboral, $conocimientos, $sobreMi, $tipoPlantilla)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> edad = $edad;
        $this -> telefono = $telefono;
        $this -> mail = $mail;
        $this -> estudios = $estudios;
        $this -> residencia = $residencia;
        $this -> expLaboral = $expLaboral;
        $this -> conocimientos = $conocimientos;
        $this -> sobreMi = $sobreMi;
        $this -> tipoPlantilla = $tipoPlantilla ;
    }

    /**
     * Genera el pdf y lo guarda en la carpeta archivos.
     * Retorna el nombre del pdf
     * @return string
     */
    public function generarCv ()
    {
        $nombre = $this -> getNombre();
        $apellido = $this -> getApellido();
        $edad = $this -> getEdad();
        $telefono = $this -> getTelefono();
        $mail = $this -> getMail();
        $estudios = $this -> getEstudios();
        $residencia = $this -> getResidencia();
        $expLaboral = $this -> getExpLaboral();
        $conocimientos = $this -> getConocimientos();
        $sobreMi = $this -> getSobreMi();
        $tipoPlantilla=$this->getTipoPlantilla();
        if($tipoPlantilla==1){
            ob_start();
            include "plantillaCv/plantilla.php";
            $contenido = ob_get_clean();
        }else if($tipoPlantilla==2){
            ob_start();
            include "plantillaCv/plantilla2.php";
            $contenido = ob_get_clean();
        }elseif($tipoPlantilla==3){
            ob_start();
            include "plantillaCv/plantilla3.php";
            $contenido = ob_get_clean();
        }else{
            $contenido="<h1>Error en las plantillas</h1>";
        }
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
        // Guardar el PDF en un archivo
        $archivoPdf = $dompdf->output();
        $ubicacionPdf = 'archivos/' . $nombrePdf;
        file_put_contents($ubicacionPdf, $archivoPdf);
        return $nombrePdf;
    }

    /**
     * Genera y descarga el CV en formato pdf.
     */
    public function descargarCv ()
    {   
        $nombre = $this -> getNombre();
        $apellido = $this -> getApellido();
        $edad = $this -> getEdad();
        $telefono = $this -> getTelefono();
        $mail = $this -> getMail();
        $estudios = $this -> getEstudios();
        $residencia = $this -> getResidencia();
        $expLaboral = $this -> getExpLaboral();
        $conocimientos = $this -> getConocimientos();
        $sobreMi = $this -> getSobreMi();
        $tipoPlantilla=$this->getTipoPlantilla();
        if($tipoPlantilla==1){
            ob_start();
            include "../plantillaCv/plantilla.php";
            $contenido = ob_get_clean();
        }elseif($tipoPlantilla==2){
            ob_start();
            include "../plantillaCv/plantilla2.php";
            $contenido = ob_get_clean();
        }elseif($tipoPlantilla==3){
            ob_start();
            include "../plantillaCv/plantilla3.php";
            $contenido = ob_get_clean();
        }else{
            $contenido="<h1>Error en las plantillas</h1>";
        }
        $nombrePdf = $nombre."-".$apellido."CV.pdf";
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->loadHtml($contenido);
        // Renderiza el PDF
        $dompdf->render();
        // Encabezados para la descarga
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $nombrePdf . '"');
        // Envía el PDF al navegador para su descarga
        $archivoPdf = $dompdf->output();
        $dompdf->stream($nombrePdf);
    }

    /**
     * Borra el PDF. Retorna un booleano.
     * Recibe por parametro el nombre del pdf.
     * @param string $nombrePdf
     * @return boolean
     */
    public function borrarPdf ($nombrePdf)
    {
        $exito = unlink("../../vista/archivos/".$nombrePdf);
        return $exito;
    }

    // Métodos get
    
    /**
     * Get de tipoPlantilla
     * @return string
     */
    public function getTipoPlantilla ()
    {
        return $this -> tipoPlantilla;
    }

    /**
     * Get de nombre
     * @return string
     */
    public function getNombre ()
    {
        return $this -> nombre;
    }

    /**
     * Get de apellido
     * @return string
     */
    public function getApellido ()
    {
        return $this -> apellido;
    }

    /**
     * Get de edad
     * @return int
     */
    public function getEdad ()
    {
        return $this -> edad;
    }

    /**
     * Get de telefono
     * @return int
     */
    public function getTelefono ()
    {
        return $this -> telefono;
    }
    
    /**
     * Get de mail
     * @return string
     */
    public function getMail ()
    {
        return $this -> mail;
    }

    /**
     * Get de estudios
     * @return string
     */
    public function getEstudios ()
    {
        return $this -> estudios;
    }

    /**
     * Get de residencia
     * @return string
     */
    public function getResidencia ()
    {
        return $this -> residencia;
    }
    
    /**
     * Get de expLaboral
     * @return string
     */
    public function getExpLaboral ()
    {
        return $this -> expLaboral;
    }

    /**
     * Get de conocimientos
     * @return string
     */
    public function getConocimientos ()
    {
        return $this -> conocimientos;
    }

    /**
     * Get de sobreMi
     * @return string
     */
    public function getSobreMi ()
    {
        return $this -> sobreMi;
    }

    // Métodos set
    
    /** 
     * Set de nombre
     * @param string $tipoPlantilla
     */
    public function setTipoPlantilla ($tipoPlantilla)
    {
        $this -> tipoPlantilla = $tipoPlantilla;
    }

    /** 
     * Set de nombre
     * @param string $nombreNuevo
     */
    public function setNombre ($nombreNuevo)
    {
        $this -> nombre = $nombreNuevo;
    }

    /**
     * Set de apellido
     * @param string $apellidoNuevo
     */
    public function setApellido ($apellidoNuevo)
    {
        $this -> apellido = $apellidoNuevo;
    }

    /**
     * Set de edad
     * @param int $edadNueva
     */
    public function setEdad ($edadNueva)
    {
        $this -> edad = $edadNueva;
    }

    /**
     * Set de telefono
     * @param int $telefonoNuevo
     */
    public function setTelefono ($telefonoNuevo)
    {
        $this -> telefono = $telefonoNuevo;
    }

    /** 
     * Set de mail
     * @param string $mailNuevo
     */
    public function setMail ($mailNuevo)
    {
        $this -> mail = $mailNuevo;
    }

    /** 
     * Set de estudios
     * @param string $estudiosNuevo
     */
    public function setEstudios ($estudiosNuevo)
    {
        $this -> estudios = $estudiosNuevo;
    }

    /** 
     * Set de residencia
     * @param string $residenciaNueva
     */
    public function setResidencia ($residenciaNueva)
    {
        $this -> residencia = $residenciaNueva;
    }

    /** 
     * Set de expLaboral
     * @param string $expLaboralNueva
     */
    public function setExpLaboral ($expLaboralNueva)
    {
        $this -> expLaboral = $expLaboralNueva;
    }

    /** 
     * Set de conocimientos
     * @param string $conocimientosNuevos
     */
    public function setConocimientos ($conocimientosNuevos)
    {
        $this -> conocimientos = $conocimientosNuevos;
    }

    /** 
     * Set de sobreMi
     * @param string $sobreMiNuevo
     */
    public function setSobreMi ($sobreMiNuevo)
    {
        $this -> sobreMi = $sobreMiNuevo;
    }

    // Método __toString

    public function __toString()
    {
    }
}