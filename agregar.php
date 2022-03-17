
<?php
$n = ($_POST["nombre"]);
$f = ($_POST["fecha"]);
$r = ($_POST["registro"]);
echo ('hola '. $n);
//crea y habre la base de datos
$bd = new SQLite3('prueba1.db');
//agrega datos a la base
$bd->exec("INSERT INTO acta (n_conpleto,f_nacimiento, registro) VALUES ('$n','$f','$r')");


?>