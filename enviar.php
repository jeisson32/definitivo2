<?php
/*Visita nuestro canal en Youtube: https://www.youtube.com/c/Tonowebs/ */
	if (isset($_POST['correo']) && isset($_POST['mensaje'])) {
		$correo = $_POST['correo'];
		$mensaje = $_POST['mensaje'];

		$from = $correo;
		$to = "jeissiton18@gmail.com";
		$subject = "Nuevo mensaje de ". $correo;
		$message = $mensaje;
		$headers = "From:" . $from;

		
		if (mail($to,$subject,$message, $headers)) {
			echo 1;
		}else{
			echo 0;
		}

	}else{
		echo 0;
	}
?>