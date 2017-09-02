<?php

require_once("class/config.php");

require_once("class/userModulo.php");

$usuario= new Usuarios();

 if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){

    $usuario->login();
    exit();
 }

?>

<!DOCTYPE html>
<html>
<head>
<?php require_once("head.php");?>
</head>
	<title>MasterPool Billar</title>
</head>
<body class="pagina_index">

<!-- BEGIN # BOOTSNIP INFO -->
<div class="container">
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Sistema de Ventas e Inventario</h1>
        <p class="text-center"><a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal"><img src="<?php echo Conectar::ruta();?>public/images/masterPool.jpg" width="400" height="400"></a></p>
	</div>
</div>
</div>	
<!-- END # BOOTSNIP INFO -->

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-circle" id="img_logo" src="<?php echo Conectar::ruta();?>public/images/masterPool.jpg">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form" method="post" action="">
		                <div class="modal-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Digite Usuario y Contraseña.</span>
                            </div>
				    		<input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario" required>
				    		<input id="password" class="form-control" type="password" name="password" placeholder="Contraseña" required>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                            	<input type="hidden" name="grabar" value="si">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
                            </div>
				    	</div>
                    </form>
                    <!-- End # Login Form -->
                 </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->


</body>
</html>