<div class="insertar" > 
	<center>
	<form calss="formulario" action="insertar.php" method="post">
		<label for="NOMBRE">NOMBRE: </label>
		<input class="input" oninput="this.value = this.value.toUpperCase()" type="text" id="NOMBRE" name="NOMBRE" required placeholder="NOMBRE COMPLETO">
		<br>
		<br>
		<label  for="FECHA">FECHA DE NACIMIENTO: </label>
		<input  class="input" type="date" id="FECHA" name="FECHA" required placeholder="FECHA DE NACIMIENTO 12/22/1990">
		<br>
		<br>
		<label  for="REGISTRO">AÑO DE REGISTRO:</label>
		<input class="input" type="number" id="REGISTRO" name="REGISTRO" required placeholder="AÑO DE REGISTRO">
		<br><br>
		<button type="submit">Guardar</button>
	</form>
</center>
</div>