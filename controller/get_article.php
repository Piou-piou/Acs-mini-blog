<?php
	//selection article
	$query = $dbc->query("SELECT * FROM article WHERE ID_article=".$_GET['id_article']);
	$res = $query->fetchAll(PDO::FETCH_OBJ);
	
	//selection categorie(s) de l'article
	$query = $dbc->query("SELECT categorie.nom_categorie FROM article_categorie, categorie WHERE article_categorie.ID_categorie = categorie.ID_categorie AND article_categorie.ID_article =".$_GET['id_article']);
	$res1 = $query->fetchAll(PDO::FETCH_OBJ);
	