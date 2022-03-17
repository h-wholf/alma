<?php
$bd = new SQLite3('prueba1.db');


$r = (($bd->querySingle('SELECT n_conpleto FROM acta ')));


echo ("<br>");

($bd->querySingle('SELECT n_conpleto FROM acta '));



echo("<br>");


$results = $bd->query('SELECT n_conpleto FROM acta');
while ($row = $results->fetchArray()) {
    
    foreach ($row as $no) {
    echo "¿Le gusta el $no?\n";
}
}
?>