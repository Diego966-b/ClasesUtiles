<?php 
header('Content-Type: text/html; charset=utf-8');
header ("Cache-Control: no-cache, must-revalidate ");

$PROYECTO = 'ClasesUtiles'; 
//variable que almacena el directorio del proyecto
$ROOT = $_SERVER['DOCUMENT_ROOT']."/$PROYECTO/";
$_SESSION['ROOT'] = $ROOT;

// Archivo funciones: 
include_once($ROOT.'utils/funciones.php');
include_once($ROOT.'utils/domPdf/vendor/autoload.php');
include_once($ROOT.'utils/laminasMail/vendor/autoload.php'); 

$ESTRUCTURA = $ROOT.'vista/estructura';
$VISTA = '/'.$PROYECTO.'/vista';
$UTILS = '/'.$PROYECTO.'/utils';
$CSS = '/'.$PROYECTO.'/vista/css';
$JS = '/'.$PROYECTO.'/vista/js';

// Variable que define la pagina de autenticacion del proyecto
$INICIO = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/vista/login/login.php";

// variable que define la pagina principal del proyecto (menu principal)
$PRINCIPAL = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/principal.php";
?>