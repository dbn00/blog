<?php
/*require_once('accesoseguro.php');*/
require_once('../cnxBD.php');
$msg =" ";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine:600,700,900" media="all">
	<link type="text/css" rel="stylesheet" href="../style.css">
</head>

<body>
	<?php include ('../cabeceraAdmin.html');?>
	
	<div id="cuerpo">
		<div id="contenidoCuerpo">
		<?php 
			$sql = "SELECT * FROM blognoticias";
			$resultado = mysql_query($sql,$idcon);
			

			if(mysql_num_rows($resultado)>=1){
				while($filas = mysql_fetch_assoc($resultado)){
					//$fecha = date('Y-m-d (H:i:s)',$filas['Fecha']);
				echo '
					<div id="Noticia">
						<h1>'.$filas['Titulo'].'</h1>
						<h5>'.$fecha.'</h5>
						<p>'.$filas['Noticia'].'</p>
						<div id="separa"></div>				
					</div> 
						';
				}
			}else{
				$msg = "NO HAY NOTICIAS";
			}

		echo $msg 



		?>			
		</div>
	</div><!--FIN CUERPO-->
</body>
</html>