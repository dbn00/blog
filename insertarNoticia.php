<?php
/*require_once('accesoseguro.php');*/
require_once('../cnxBD.php');
$msg =" ";
$recupera =" ";

	if(isset($_POST['enviar'])){ 
			
			if (mb_strlen($_POST['txtTitulo'])<=120){
				$titulo = $_POST['txtTitulo'];
				$noticia = $_POST['txtNoticia'];
				$fecha = time();

			
				$sql="INSERT INTO blogNoticias (Titulo,Noticia,Fecha) VALUES ('$titulo','$noticia',$fecha)"; //campos varchar entre comillas, campos int como la fecha sin comillas
				if(mysql_query($sql,$idcon)){
					$msg="Noticia Insertada";
				}else{ 
					$msg="Todos los campos son obligatorios";
				}
			}else{
				$msg="Maximo 120 caracteres en el Titulo";
				$recupera = $_POST['txtNoticia'];

			}
			

	}
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
			<div class="testbox">
			  <h1>Insertar Noticia</h1>

				  <form action="insertarNoticia.php" method="post" enctype="multipart/form-data" name="altaRazas" id="altaRazas">

					  <input type="text" name="txtTitulo" id="txtTitulo" placeholder="Titulo" required />
					  <textarea  name="txtNoticia" id="txtNoticia" required cols="50" rows="20"> <?php echo $recupera ?> </textarea> 
					 <br/><br/>
					 <p><?php echo $msg;?></p>
					
					<input type="submit" name="enviar" id="enviar" value="Insertar" class="button">

				  </form>
			</div>			
		</div>
	</div><!--FIN CUERPO-->
</body>
</html>