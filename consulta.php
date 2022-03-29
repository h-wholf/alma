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
	<title>Tabla estática</title>
	<style>
		table, th, td {
		    border: 1px solid blue;
		}
	</style>
</head>
<body>
	<table>
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
	</table>
</body>
</html>


