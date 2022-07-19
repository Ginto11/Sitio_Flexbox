<!-- <?php 

$destinatario = 'salinitosnelson@gmail.com';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = 'Enviado desde el portafolio, por ' . $email;

$mensajeUnificado = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensajeUnificado, $header);


echo "<script> alert('Correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='contacto.php'\", 1000)</script>";

/*header("Location:contacto.php");*/



 ?> -->