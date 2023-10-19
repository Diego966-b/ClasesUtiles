<?php
include_once("../config.php");
$pagSeleccionada = "Informe";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once($ESTRUCTURA . "/header.php"); ?>
    <link rel="stylesheet" type="text/css" href = "<?php echo $CSS; ?>/informe.css">
</head>

<body>
    <?php include_once($ESTRUCTURA . "/cabecera.php"); ?>
    <div class="container">
        <div>
            <h1 class="text-center">Uso de Librerias Utiles</h1>

            <h2>Detalles generales</h2>
            <p>Eligimos las librerias domPdf y Laminas-mail</p>
            <p>Usamos <a href="https://getcomposer.org/download/" target="_blank">Composer</a> para instalar ambas librerias</p>
            <p>Cuando queremos usar ambas librerías simplemente incluimos el autoload.php y hacemos un new del objeto.</p>


            <hr>

            <h2>DomPdf</h2>
            <p>Es una librería que sirve para convertir código html en pdf.</p>

            <h4>Links importantes:</h4>
            <ul>
                <li><a href="https://github.com/dompdf/dompdf" target="_blank">Github de domPdf</a></li>
                <li> <a href="https://github.com/dompdf/dompdf/releases" target="_blank">Descarga dompdf</a></li>
                <li><a href="https://github.com/dompdf/dompdf/wiki" target="_blank">Documentacion de dompdf</a></li>
            </ul>



            <h4>Requerimientos</h4>
            <ul>
                <li>PHP version 7.1 o superior</li>
                <li>DOM extension</li>
                <li>MBString extension</li>
                <li>php-font-lib</li>
                <li>php-svg-lib</li>
            </ul>

            <h4>Comptaibilidad</h4>
            <p>Esta libreria es compatible con sistemas operativos windows y linux.</p>
            <p>En el pdf se pueden usar etiquetas html pero nunca html5. </p>
            <p>Las hojas de estilo pueden ser escritas en css pero hasta la versión 2.1 y algunas pocas propiedades de la versión 3.0</p>


            <h4>Instalación</h4>
            <pre>
            <code>
        composer require dompdf/dompdf
            </code>
            </pre>
            <h4>Inicio Rapido</h4>

            <pre>
            <code>

        //reference the Dompdf namespace
        use Dompdf\Dompdf; 
        
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml('hello world');
        
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $dompdf->render();
        
        // Output the generated PDF to Browser
        $dompdf->stream();
            
        </code>
        </pre>

            <h4>Algunos metodos utilizados</h4>

            <pre>
            <code>


        El objeto Options(), nos permitira establecer configuraciones para el convertidor pdf
        $options = new Options();
        $options->set('isRemoteEnabled', true);

        El objeto Dompdf, es el que nos permitira convertir el codigo html a PDF
        El metodo loadhtml(), es el encargado de obtener el codigo html, ya sea a traves de un archivo, o pasandole el propio codigo como parametro
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($contenido);

        El metodo setPaper(), nos permite establecer el tamaño y la orientacion de las hojas del pdf.
        $dompdf->setPaper('A4', 'portrait');

        El metodo render(), renderiza todo el contenido html a pdf.
        $dompdf->render();

        El Metodo output(): Descargar el archivo PDF generado.
        $dompdf->output();

        El metodo stream(), muestra el pdf en el navegador.
        $dompdf->stream();


            </code>
            </pre>

            <hr>

            <h2>Laminas-mail</h2>
            <p>Es una libreria que nos permite enviar correos electronicos.</p>

            <h4>Links importantes:</h4>
            <ul>
                <li><a href="https://github.com/laminas/laminas-mail" target="_blank">GitHub Laminas-mail</a></li>
                <li><a href="https://docs.laminas.dev/laminas-mail/">Documentacion Laminas-mail</a></li>
            </ul>

            <h4>Instalación</h4>
            <pre>
            <code>
            composer require laminas/laminas-mail
            </code>
            </pre>

            <h4>Requerimientos</h4>
            <ul>
                <li>En la ultima version (2.23.0) requiere php 8.0</li>
            </ul>

            <h4>Algunos metodos utilizados</h4>



            <p>Metodos utilizados para configuracion de servidor smtp, cuerpo, asunto, origen y destino del correo electronico</p>
            <p class="nota">NOTA: Puede que a pesar de que el usuario y contraseña estén bien escritos nos suelte un error de autentificación,
                si eso pasa tendremos que ir a la configuración de nuestra cuenta de google, seguridad y ahí activar el acceso de aplicaciones menos seguras.
            </p>
            <pre>
        <code>
        use Laminas\Mail\Message;
        use Laminas\Mail\Transport\Smtp as SmtpTransport;
        use Laminas\Mail\Transport\SmtpOptions

        creamos una instancia de la clase Message().
        $message = new Message()

        En el metodo addTo() agrega el destinatario del mail.
        $message->addTo('matthew@example.org')

        En el addFrom() agrega el emisor del mail.
        $message->addFrom('ralph@example.org')

        En el setSubjet() agrega el asunto del mensaje.
        $message->setSubject('Greetings and Salutations!')

        En setBody() agrega lo que se mostrara en el cuerpo del mensaje.
        $message->setBody("Sorry, I'm going to be late today!")
        
        // Setup SMTP transport using LOGIN authentication
        crea un objeto SmtpTransport 
        $transport = new SmtpTransport()
        Crea un objeto SmtpOtions y seteamos parametros del servidor
        name: es el nombre del host smtp para enviar el mail, en nuestro caso usamos el de gmail (smtp.gmail.com)
        host: es la ip del host
        connection_class: indica que la config a continuacion va a ser para el login.
        connection_config: en este campo tendremos que escribir nuestro correo(username) y contraseña(password) del que se mandará el mail. 
        $options   = new SmtpOptions([
            'name'              => 'localhost.localdomain', 
            'host'              => '127.0.0.1', 
            'connection_class'  => 'login', 
            'connection_config' => [  
                'username' => 'user',
                'password' => 'pass',
            ],
        ]);
        El método setOptions($options) simplemente setea las opciones anteriores.
        $transport->setOptions($options);
        $transport->send($message);
                </code>
    </pre>

            <p>Metodos utilizados, para configurar libreria y enviar archivos adjuntos</p>


            <pre>
<code>
    
        $html = new MimePart($htmlMarkup);
        $html->type = Mime::TYPE_HTML;
        $html->charset = 'utf-8';
        $html->encoding = Mime::ENCODING_QUOTEDPRINTABLE;

        $image = new MimePart(fopen($pathToImage, 'r'));
        $image->type = 'image/jpeg';
        $image->filename = 'image-file-name.jpg';
        $image->disposition = Mime::DISPOSITION_ATTACHMENT;
        $image->encoding = Mime::ENCODING_BASE64;

        $body = new MimeMessage();
        $body->setParts([$html, $image]);

        $message = new Message();
        $message->setBody($body);

        $contentTypeHeader = $message->getHeaders()->get('Content-Type');
        $contentTypeHeader->setType('multipart/related');

</code>
</pre>
</div>
</div>
    <br><br><br><br><br>
    <?php include_once($ESTRUCTURA . "/pie.php"); ?>
    <script src="<?php echo $JS ?>/validar.js"></script>

</body>

</html>