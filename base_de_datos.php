<?php
/*
	CRUD con SQLite3, PDO y PHP
	parzibyte.me
*/
$baseDeDatos = new PDO("sqlite:" . __DIR__ . "/prueba1.db");
$baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>