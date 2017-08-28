<?php

   require_once("class/config.php");

   if(isset($_SESSION["backend_id"])){


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Control Panel</title>
	<?php require_once("head.php");?>

</head>
<body>

     <div class="container-fluid">

     	<?php require_once("menu_principal.php");?>

     	<div class="container-fluid">
     		<div class="row">
     			  <div class="col-sm-3">

     				<?php require_once("menu_lateral.php");?>
     			  </div>

     			<div class="col-sm-8">

     				<h2>Bienvenido a Masterpool</h2>
     				<p class="justify">Nueva imagen... tratando la manera de mejorar día a dia para brindarte un mejor servicio. Porque vos te lo mereces</p>
     			</div>
     		</div><!--row-->
     	</div><!--container-->
      </div><!--container-fluid-->
      
<?php require_once("footer_js_tabla.php");?>

<?php require_once("footer.php");?>
     

</body>
</html>

<?php
  } else {

  	 header("Location:".Conectar::ruta()."index.php");
  }
?>
