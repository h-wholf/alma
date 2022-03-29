<?php

$c = ($_POST["NOMBRE"]);
/*

	CRUD con SQLite3, PDO y PHP
	parzibyte.me
*/
include_once __DIR__ . "/base_de_datos.php"; #Al incluir este script, podemos usar $baseDeDatos

$resultado = $baseDeDatos->query("SELECT * FROM acta where n_conpleto ='$c';");
$datos = $resultado->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>REGISTRO CIVIL DE SANTA MARIA GUADALUPE TECOLA</title>
    <script type="text/javascript" src="ocultar.js"></script>
	<style> 
		table, th, td {
		    border: 2px solid #202020;
		}
	</style>
</head>
<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>
<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';

?>
<body>
	<center>
	<table class="tabla">
		<thead>
			<tr>
				<th>nombre completo</th>
				<th> fecha de nacimiento </th>
				<th> año de registro </th>
			  <th> NUMERO ACTA</th>
			</tr>
		</thead>
		<tbody>
			<!-- Notar que siempre se repite lo que hay entre <tr> y </tr> -->
			<!-- Así que lo hacemos en un ciclo foreach -->

			<?php foreach($datos as $d){ /*Notar la llave que dejamos abierta*/ ?>
				<tr>
					<td><?php echo $d->n_conpleto ?></td>
					<td><?php echo $d->f_nacimiento ?></td>
					<td><?php echo $d->registro ?></td>
				
				</tr>
			<?php } /*Cerrar llave, fin de foreach*/ ?>

		</tbody>
	</table></center>
</body>
</html>


