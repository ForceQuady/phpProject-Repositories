<?php 
session_start();
date_default_timezone_set('America/Chile');

#Constantes de Conexion
define('DB_HOST','127.0.0.1');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','HomieStart');

#Constantes de la APP
define('HTML_DIR','html/');
define('APP_TITLE','YOU_TITLE');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' HomieStart Software.');
define('APP_URL','http://127.0.0.1/XHForm/'); 

#Constantes de PHPMailer
define('PHPMAILER_HOST','YOU_HOST');
define('PHPMAILER_USER','YOU_USER');
define('PHPMAILER_PASS','YOU_PASS');
define('PHPMAILER_PORT',465);

#Constantes Personalizadas
define('MIN_TITULOS_TEMAS_LONGITUD',9);
define('MIN_CONTENT_TEMAS_LONGITUD',270);

#Estructura
require('vendor/autoload.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');
require('core/bin/functions/Categorias.php');
require('core/bin/functions/Foros.php');
require('core/bin/functions/EmailTemplate.php');
require('core/bin/functions/LostpassTemplate.php');
require('core/bin/functions/UrlAmigable.php');
require('core/bin/functions/BBcode.php');
require('core/bin/functions/OnlineUsers.php');
require('core/bin/functions/GetUserStatus.php');
require('core/bin/functions/IncreaseVisita.php');

$_users = Users();
$_categorias = Categorias();
$_foros = Foros();

?>
