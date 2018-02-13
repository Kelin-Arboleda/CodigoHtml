<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST" action="">
	
	<input type="number" name="num" placeholder="Ingrese un numero: ">
		<br>
	<select name="opcion">
		<option value="">Repetir</option>
		<option value="S">Si</option>
		<option value="N">No</option>
	</select>
	<br>
	<br>
	<input type="submit" name="enviar" value="Grabar">
	<input type="reset" name="cancela" value="Cancelar">
	<br>
	<br>

</form>

</body>
</html>


<?php  
$num=$_POST['num']; 
$opcion=$_POST['opcion']; 

	while($opcion == 'S'){
		for($i = 1; $i <= 10; $i++){
			echo $num." x ".$i." = ".$i*$num."<br>";
		}
		exit;
	}

	