<?php
ob_start();

ini_set('display_errors', 1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
header("Content-type: text/html;charset=utf-8");
ini_set("error_reporting", E_ALL & ~E_DEPRECATED);
ini_set('upload_max_filesize', '200M');
ini_set('post_max_size', '200M');

//REQUIRIMENTO DE SISTEMA

require_once "sistema/config.php";
require_once "sistema/init_func.php";
require_once "sistema/smodel.php";
require_once "sistema/scontroler.php";
require_once "sistema/app.php";

Sessao::iniciasessao();
//INICIANDO APLICAÇÃO
$app = new App;
?>
