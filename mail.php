<?php 
	$nombre = $_POST['text'];
	$correo = $_POST['email'];
	$mensaje = $_POST['message'];

	//echo $nombre."ha dicho <br/>".$mensaje;
	if(mail('alejaosm19@gmail.com', $correo, $mensaje)){
		// echo "window.location = 'http://auditoriasitem.esy.es/pagina_tio/';";
		// echo 'window.location.href = "http://auditoriasitem.esy.es/pagina_tio/"';
		 //sleep(5);
		 //echo"<script type=\"text/javascript\">alert('MAIL ENVIADO'); </script>"; 
		 //$pagina = "http://auditoriasitem.esy.es/pagina_tio/";
  		 //Header("Location: $pagina"); 
			$men="SE HA ENVIADO CON ÉXITO SU MENSAJE, EN BREVE UN ASESOR SE CONTACTARÁ CON USTED";
		print "<script>alert('$men')</script>";
        print("<script>window.location.replace('http://auditoriasitem.esy.es/pagina_tio/');</script>"); 
	}else{
		echo "NO SE HA PODIDO ENVIAR SU MENSAJE POR FAVOR INTENTE DE NUEVO SI EL ERRO 
		PERSISTE CONTACTE A GARDEN POOL SERVIC MANTENIMIENTO";
	}
 ?>
 