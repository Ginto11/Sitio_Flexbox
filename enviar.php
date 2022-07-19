<?php 
	


	$conexion = mysqli_connect("localhost", "root", "", "pagina_flex")or die("Error en el servidor");

	$sql = "insert into encuesta values (null, '".$_POST['nombre']."', '".$_POST['apellido']."', ".$_POST['edad'].", ".$_POST['puntaje'].", '".$_POST['resena']."', '".$_POST['pregunta1']."', '".$_POST['pregunta2']."')";

	$resultado = mysqli_query($conexion, $sql) or die ("Error en el query");
	mysqli_close($conexion);


	echo("<script> alert('Enviado Exitosamente');</script>");
	echo("<script> setTimeout(\"location.href='encuesta.html'\", 1000)</script>");






?>