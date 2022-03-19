<?php
$bd = new SQLite3('prueba1.db');


$r = (($bd->querySingle('SELECT n_conpleto FROM acta ')));


echo ("<br>");

($bd->querySingle('SELECT n_conpleto FROM acta '));



echo("<br>");



echo (shell_exec("echo SELECT *from acta|sqlite3 prueba1.db"))
?>