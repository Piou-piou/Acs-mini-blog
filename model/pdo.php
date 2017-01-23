<?php
	try {
		$dbc = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbuser, $dbpass);
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}