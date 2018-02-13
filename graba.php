<?php  
$nombre=$_POST['nombre1'];
$apellido=$_REQUEST['apellido'];
$edad=$_REQUEST['edad'];
$email=$_REQUEST['email'];

if(!empty($nombre1)){

	echo $nombre."<br>".$apellido."<br>Edad: ".$edad."<br>Correo: ".$email."<br>Obs: ".$obs."<br>";

}else{

	?>

	<h2>Debe Ingresar Un Nombre</h2>
	<?php
}


echo '<a href="index.php"> Volver </a>'

?>

