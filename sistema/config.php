<?php

//STRINGS PASTA DA APLICAÇÃO
$pasta = "sites/novodenovo";
$url = "http://" . $_SERVER['SERVER_NAME'] . "/" . $pasta . "/";
$titulo = "Novo de Novo Reformas";
$baseurlapp = "web";

//STRINGS CONNSTANTES DEFINITIVAS
define('BASEURL', $url);
define('TITULOAPP', $titulo);
define('PUBLICURL', BASEURL . "publico/");
define('IMGPUBLIC', PUBLICURL . 'img/');
define('JSPUBLIC', PUBLICURL . 'js/');

define('CSSPUBLIC', PUBLICURL . 'css/');

//LIB

define('JSLIB', BASEURL . 'sistema/javalib/');
define('CSSLIB', BASEURL . 'sistema/csslib/');
define('IMGLIB', BASEURL . 'sistema/imglib/');

define('BASEURLAPP', $baseurlapp);
//DATABASE
//$local = "186.202.152.60";
//$user = "midiakitcom14";
//$pass = "midiakitcom14";
//$dbname = "midiakitcom14";

$local = "localhost";
$user = "root";
$pass = "mdk939kit";
$dbname = "novodenovo";

define('HOST', $local);
define('DBUSER', $user);
define('DBPASS', $pass);
define('DBNAME', $dbname);
?>
