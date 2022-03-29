<div class="titulo"><center>base de datos</center></div>

<div class="contenedor">
	<section class="consultar">
		<center>
	<form calss="formulario" action="consulta.php" method="post">
		<label for="NOMBRE">NOMBRE: </label>
		<input class="input" oninput="this.value = this.value.toUpperCase()" type="text" id="NOMBRE" name="NOMBRE" required placeholder="NOMBRE COMPLETO">
		<br>
		<br>
		<!--
		<label  for="FECHA">FECHA DE NACIMIENTO: </label>
		<input  class="input" type="date" id="FECHA" name="FECHA" required placeholder="FECHA DE NACIMIENTO 12/22/1990">
		<br>
		<br>
		<label  for="REGISTRO">AÑO DE REGISTRO:</label>
		<input class="input" type="number" id="REGISTRO" name="REGISTRO" required placeholder="AÑO DE REGISTRO">
		<br><br>-->
		<button type="submit">buscar</button>
	</form>
</center>
<div><center><a class="link2" href="index.php">regresar al inicio</a></center></div>
		
	</section>
</div>