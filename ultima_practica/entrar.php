<?php
include('funciones.php');

//funcion que me permite saber si un usuario est� logeado o no

cabecera('Finalizar compra');
echo "<div id=\"contenido\">\n";
echo "<h1>Finalizar Compra</h1>";


if(!isset($_SESSION['usuario'])){
	echo"<div class='error'><h2>Debes logearte para acceder a esta p�gina</h2></div>";
}else{
	
 ?>
 <form action="introducir.php" method="post">
 	<label for="lenguajes">Idiomas:</label>
 	<select name="lenguajes">
 		<option value="0">Todos</option>
 		
 		<?php 
 			foreach ($idiomas as $key => $val) {
 				echo "<option value='".$val['LID']."'>".$val['IDIOMA']."</option>";
			 }
 		?>
 		
 	</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 	
 	<label for="categorias">Categor&iacute;as:</label>
 	<select name="categorias">
 		<option value="0">Todos</option>
 		<?php 
 			foreach ($categorias as $key => $val) {
 				echo "<option value='".$val['id_categoria']."'>".$val['nom_categoria']."</option>";
			 }
 		?>
 		
 	</select><br />
 	
 	<input type="submit" value="Enviar" />
 </form>


<?php
}
echo "</div>";
pie();
?>

