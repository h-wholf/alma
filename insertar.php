<?php
//aqui van todos los scripts de javascript
include 'scripts.php';

?>
<?php
// aqui se define el titulo de la pagina y se linkea los estilos css y otros metadatos
include 'head.php';

?>
<?php
//aqui va el fondo de la pagina web
include 'botom.php';

?>

<?php
/*
	CRUD con SQLite3, PDO y PHP
	parzibyte.me
*/

if (empty($_POST["NOMBRE"])) {
	exit("Faltan uno o más datos"); #Terminar el script definitivamente
}

if (empty($_POST["FECHA"])) {
	exit("Faltan uno o más datos"); #Terminar el script definitivamente
}

if (empty($_POST["REGISTRO"])) {
	exit("Faltan uno o más datos"); #Terminar el script definitivamente
}

#Si llegamos hasta aquí es porque los datos al menos están definidos
include_once __DIR__ . "/base_de_datos.php"; #Al incluir este script, podemos usar $baseDeDatos

# creamos una variable que tendrá la sentencia
$sentencia = $baseDeDatos->prepare("INSERT INTO acta(n_conpleto, f_nacimiento, registro)
	VALUES(:NOMBRE, :FECHA, :REGISTRO);");


# Debemos pasar a bindParam las variables, no podemos pasar el dato directamente
# debido a que la llamada es por referencia


$sentencia->bindParam(":NOMBRE", $_POST["NOMBRE"]);
$sentencia->bindParam(":FECHA", $_POST["FECHA"]);
$sentencia->bindParam(":REGISTRO", $_POST["REGISTRO"]);
$resultado = $sentencia->execute();
if($resultado === true){
	echo "SE REGISTRÓ CORRECTO";
}else{
	echo "Lo siento, ocurrió un error";
}


?>
<script type="text/javascript">
	function redireccionarPagina() {
  window.location = "2.php";
}
setTimeout("redireccionarPagina()", 2000);
</script>