<?php

$n = ($_POST["n"]);
$e = ("echo ");
$b = ("\" |sqlite3 prueba1.db");
$s = ('"SELECT *from acta  where n_conpleto = "');
exec('ls');
echo ('hola');
$resultado = exec('echo "SELECT *from acta where n_conpleto = \"Cecilia Vargas alvarez\" "|sqlite3 prueba1.db');

print "Salida: $resultado\n"; 

$resultado2 = exec("echo 'SELECT *from acta where n_conpleto = $n '|sqlite3 prueba1.db");
print "Salida: $resultado2\n"; 
echo ($n);
?>