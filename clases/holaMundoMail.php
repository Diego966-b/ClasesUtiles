<?php
    require 'laminasMail/vendor/autoload.php';

    use Laminas\Mail\Message;
    use Laminas\Mail\Transport\Smtp as SmtpTransport;
    use Laminas\Mail\Transport\SmtpOptions;
    
    // Configurar la conexión SMTP
    $transport = new SmtpTransport();
    $options = new SmtpOptions([
        'name'              => 'smtp.gmail.com',
        'host'              => 'smtp.gmail.com',
        'port'              => 587,
        'connection_class'  => 'login',
        'connection_config' => [
            'username' => 'diego.benjamin@est.fi.uncoma.edu.ar', // Tu mail
            'password' => '', // Tu contraseña
            'ssl'      => 'tls',
        ],
        /*
            Si hay error de credenciales:
            Habilita el acceso de aplicaciones menos seguras: 
            Gmail tiene una función de seguridad que bloquea el acceso de aplicaciones menos seguras por defecto. 
            Puedes habilitar esta opción siguiendo estos pasos:
            a. Inicia sesión en tu cuenta de Gmail en un navegador web.
            b. Ve a la página "Seguridad" o "Security" en la configuración de tu cuenta de Google.
            c. Desplázate hacia abajo hasta la sección "Aplicaciones y sitios que menos seguros acceden a tu cuenta" o "Less secure apps".
            d. Activa la opción "Permitir aplicaciones menos seguras".
        */
    ]);
    $transport->setOptions($options);
    
    // Crear y enviar el correo electrónico
    $message = new Message();
    $message->setSubject('Asunto del correo electrónico');
    $message->setBody('Hola Mundo');
    $message->setFrom('diego.benjamin@est.fi.uncoma.edu.ar', 'Diego Benjamin'); // Persona que lo envia
    $message->addTo('diegobennjaminn@gmail.com', 'Roberto Perez'); // Destinatario

    // Envía el correo electrónico
    $transport->send($message);
?>