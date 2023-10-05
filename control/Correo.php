<?php
include_once("../../config.php");
use Laminas\Mail\Message;
use Laminas\Mail\Transport\File as FileTransport;
use Laminas\Mail\Transport\FileOptions;
use Laminas\Math\Rand;
use Laminas\Mail\Transport\Smtp as SmtpTransport;
use Laminas\Mail\Transport\SmtpOptions;
class Correo
{
    
    // Atributos

    private $nombreEmisor, $emailDestino, $asunto, $nombrePdf;

    // Métodos 
    
    /**
     * Recibe los valores iniciales para los atributos
     * @param 
     */
    public function __construct($nombreEmisor, $emailDestino, $asunto, $nombrePdf)
    {
        $this -> nombreEmisor = $nombreEmisor;
        $this -> emailDestino = $emailDestino;
        $this -> asunto = $asunto;
        $this -> nombrePdf = $nombrePdf;
    }

    /**
     * Envia un correo
     */
    public function enviarCorreo ()
    {
        $exito = false;
        $emailDestino = $this -> getEmailDestino();
        $asunto = $this -> getAsunto();
        $transportMail = new SmtpTransport();
        $optionsMail = new SmtpOptions([
            'name'              => 'smtp.gmail.com',
            'host'              => 'smtp.gmail.com',
            'port'              => 587,
            'connection_class'  => 'login',
            'connection_config' => [
                'username' => 'diego.benjamin@est.fi.uncoma.edu.ar', // Tu mail
                'password' => '', // Tu contraseña
                'ssl'      => 'tls',
            ],
        ]);
        $transportMail->setOptions($optionsMail);
        
        $message = new Message();
        $message->addTo($emailDestino);
        $message->addFrom('diego.benjamin@est.fi.uncoma.edu.ar');
        $message->setSubject($asunto);
        $message->setBody("CV Generado con ...");

        // Setup File transport
        
        $transportArchivo = new FileTransport();
        $optionsArchivo   = new FileOptions([
            'path'     => '../archivos/',
            'callback' => function (FileTransport $transportArchivo) {
                $nombrePdf = $this -> getNombrePdf();
                return $nombrePdf;
            },
        ]);
        $transportArchivo->setOptions($optionsArchivo);
        print_r($transportMail);
        if (($transportArchivo <> null) && ($transportMail <> null))
        {
            $exito = true;
        }

        $transportMail->send($message);
        return $exito;
    }

    // Métodos get

    /**
     * Get de nombreEmisor
     * @return string
     */
    public function getNombreEmisor ()
    {
        return $this -> nombreEmisor;
    }

    /**
     * Get de emailDestino
     * @return string
     */
    public function getEmailDestino ()
    {
        return $this -> emailDestino;
    }

    /**
     * Get de asunto
     * @return string
     */
    public function getAsunto ()
    {
        return $this -> asunto;
    }

    /**
     * Get de nombrePdf
     * @return string
     */
    public function getNombrePdf ()
    {
        return $this -> nombrePdf;
    }

    // Métodos set

    /**
     * Set de nombreEmisor
     * @param string $nombreEmisorNuevo
     */
    public function setNombreEmisor ($nombreEmisorNuevo)
    {
        $this -> nombreEmisor = $nombreEmisorNuevo;
    }

    /**
     * Set de emailDestino
     * @param string $emailDestinoNuevo
     */
    public function setEmailDestino ($emailDestinoNuevo)
    {
        $this -> emailDestino = $emailDestinoNuevo;
    }

    /**
     * Set de asunto
     * @param string $asuntoNuevo
     */
    public function setAsunto ($asuntoNuevo)
    {
        $this -> asunto = $asuntoNuevo;
    }

    /**
     * Set de nombrePdf
     * @param string $nombrePdfNuevo
     */
    public function setNombrePdf ($nombrePdfNuevo)
    {
        $this -> nombrePdf = $nombrePdfNuevo;
    }

    // Método __toString

    public function __toString ()
    {

    }
}