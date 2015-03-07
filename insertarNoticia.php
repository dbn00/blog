<?php
/*require_once('accesoseguro.php');*/
require_once('cnxBD.php');

if(isset($_POST['enviar'])){ 
		if(mb_strlen($_POST['titulo'])>=15){
			$tituloBien=true;
				
		}else{
				$tituloBien=false;
				$error1 = " TIENES QUE PONER MAS LETRAS";
		}
	if(mb_strlen($_POST['noticia'])>=80){
		$noticiaBien=true;
	}else{
		$noticiaBien=false;
		$error2= "UTILIZA UN MINIMO DE 80 CARACTERES";
	}

	if($noticiaBien && $tituloBien){
		$idcon=mysql_connect('localhost','root','');
		mysql_select_db('WM1',$idcon);
		$titulo = $_POST['titulo'];
		$noticia = $_POST['noticia'];
		$fecha = time();
		$sql="INSERT INTO blogNoticias (Titulo,Noticia,Fecha) VALUES ('$titulo','$noticia',$fecha)"; //campos varchar entre comillas, campos int como la fecha sin comillas
		if(mysql_query($sql,$idcon)){
			$msg="El formulario ha sido enviado";
		}else{ 
				$msg="Todos los campos son obligatorios";
		}

	}

}
?>

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine:600,700,900" media="all">
	<link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
	<?php include ('cabeceraAdmin.html');?>
	
	<div id="cuerpo">
		<div id="contenidoCuerpo">

		</div>
	</div><!--FIN CUERPO-->
</body>
</html>