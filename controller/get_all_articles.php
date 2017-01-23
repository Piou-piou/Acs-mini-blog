<?php
	$query = $dbc->query("SELECT * FROM article");
	
	$res = $query->fetchAll(PDO::FETCH_OBJ);