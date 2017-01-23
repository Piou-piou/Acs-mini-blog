<?php
	$page = "index.php";
	
	define('WEBROOT', str_replace($page, 'views/template/', $_SERVER['SCRIPT_NAME']));
	require_once("config/database.config.php");
	require_once("model/pdo.php");
	
	if (isset($_GET['page'])) {
		$page = "views/".$_GET['page'].".php";
	}
	else {
		$page = "views/index.php";
	}
	
	if (file_exists($page)) {
		if ($page == "views/index.php") {
			require_once("controller/get_all_articles.php");
		}
		if ($page == "views/article.php") {
			require_once("controller/get_article.php");
		}
		
		include("views/template/index.php");
	}
	else {
		echo("page non trouvée");
	}
	