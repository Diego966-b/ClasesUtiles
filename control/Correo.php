<?php
if (file_exists("../utils/laminasMail/vendor/autoload.php"))
{
    include_once ("../utils/laminasMail/vendor/autoload.php");
}
elseif (file_exists("../../utils/laminasMail/vendor/autoload.php"))
{
    include_once ("../../utils/laminasMail/vendor/autoload.php");
}
use Laminas\Mail\Message;
use Laminas\Mail\Transport\Smtp as SmtpTransport;
use Laminas\Mail\Transport\SmtpOptions;

use Laminas\Mime\Message as MimeMessage;
use Laminas\Mime\Mime;
use Laminas\Mime\Part as MimePart;

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
        $this->nombreEmisor = $nombreEmisor;
        $this->emailDestino = $emailDestino;
        $this->asunto = $asunto;
        $this->nombrePdf = $nombrePdf;
    }

    /**
     * Envia un correo. Retorna un string segun su exito.
     * @return boolean
     */
    public function enviarCorreo()
    {
        $resultado = [];
        $emailDestino = $this->getEmailDestino();
        $asunto = $this->getAsunto();
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

        $nombrePdf = $this->getNombrePdf();

        $textContent = 'Este pdf fue generado con la pagina generadorPdf.com.';
        $attachments = "../archivos/".$nombrePdf;

        $message = new Message();
        $message->addTo($emailDestino);
        $message->addFrom('diego.benjamin@est.fi.uncoma.edu.ar');
        $message->setSubject($asunto);

        $body = new MimeMessage();

        $text           = new MimePart($textContent);
        $text->type     = Mime::TYPE_TEXT;
        $text->charset  = 'utf-8';
        $text->encoding = Mime::ENCODING_QUOTEDPRINTABLE;

        $file              = new MimePart(fopen($attachments, 'r'));
        $file->type        = Mime::TYPE_OCTETSTREAM;
        $file->filename    = $attachments;
        $file->disposition = Mime::DISPOSITION_ATTACHMENT;
        $file->encoding    = Mime::ENCODING_BASE64;

        $body = new MimeMessage();
        $body->setParts([$text, $file]);

        $message->setBody($body);

        $contentTypeHeader = $message->getHeaders()->get('Content-Type');
        $contentTypeHeader->setType('multipart/related');
        try {
            $transportMail->send($message);
            $resultado ["exito"] = "si";
            $resultado ["mensajeError"] = "";
            $pdf = new Curriculum("","","","","","","","","","","");
            $exito = $pdf -> borrarPdf ($nombrePdf);
        } catch (Laminas\Mail\Exception\ExceptionInterface $e) {
            // Error de laminas-mail
            $mensajeError = $e->getMessage();
            $resultado ["exito"] = "errorLaminas";
            $resultado ["mensajeError"] = $mensajeError;
        } catch (\Exception $e) {
            // Error general
            $mensajeError = $e->getMessage();
            $resultado ["exito"] = "errorGeneral";
            $resultado ["mensajeError"] = $mensajeError;
        }
        return $resultado;
    }

    // Métodos get

    /**
     * Get de nombreEmisor
     * @return string
     */
    public function getNombreEmisor()
    {
        return $this->nombreEmisor;
    }

    /**
     * Get de emailDestino
     * @return string
     */
    public function getEmailDestino()
    {
        return $this->emailDestino;
    }

    /**
     * Get de asunto
     * @return string
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Get de nombrePdf
     * @return string
     */
    public function getNombrePdf()
    {
        return $this->nombrePdf;
    }

    // Métodos set

    /**
     * Set de nombreEmisor
     * @param string $nombreEmisorNuevo
     */
    public function setNombreEmisor($nombreEmisorNuevo)
    {
        $this->nombreEmisor = $nombreEmisorNuevo;
    }

    /**
     * Set de emailDestino
     * @param string $emailDestinoNuevo
     */
    public function setEmailDestino($emailDestinoNuevo)
    {
        $this->emailDestino = $emailDestinoNuevo;
    }

    /**
     * Set de asunto
     * @param string $asuntoNuevo
     */
    public function setAsunto($asuntoNuevo)
    {
        $this->asunto = $asuntoNuevo;
    }

    /**
     * Set de nombrePdf
     * @param string $nombrePdfNuevo
     */
    public function setNombrePdf($nombrePdfNuevo)
    {
        $this->nombrePdf = $nombrePdfNuevo;
    }

    // Método __toString

    public function __toString()
    {
    }
}