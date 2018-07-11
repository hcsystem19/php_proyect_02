<?php
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	$enlace_actual = $_SERVER['HTTP_HOST'];
		
	if ($enlace_actual == "localhost") {
		define('URL', "http://localhost/public_html/Proyecto03/");
	}else{
		define('URL', "http://" . $enlace_actual . "/public_html/Proyecto03/");
	}

	require_once "Config/Autoload.php";
	Config\Autoload::run();
	require_once "Views/template.php";
	Config\Enrutador::run(new Config\Request());

?>