<?php if(isset($mensaje)): ?>
	<?php echo $mensaje; ?>
<?php endif ?>

<div class="row" style="margin-top: 180px">
	<form method="post" action="<?php echo base_url(); ?>index.php/login/verificar">
		<div class="col-md-offset-4 col-md-4 col-md-offset-4" style="background-color: white">
			<div style="text-align: center; margin-left: 110px">
				<img src="<?php echo base_url(); ?>public/imagenes/logo.png" class="img-responsive">
			</div>	
			<h3 style="text-align: center;">Iniciar Sesión</h3>
			Cedula: <input style="border-color: #ff8b50;" class="form-control" type="text" name="cedula" required="" oninput="maxLengthCheck(this)" min="1" max="9999999999" onkeypress="return isNumeric(event)">
			Contraseña: <input style="border-color: #ff8b50;" class="form-control" type="password" name="pass" required="">
			<div  style="text-align: center; margin-top: 20px">
				<input style="background-color: #ff8b50; color: white; padding-left: 50px; padding-right: 50px; margin-bottom: 20px" class="btn btn-default" type="submit" name="enviar" value="Continuar"> <br>
			</form>
			<span>¿No tienes una cuenta? <a href="<?php echo base_url(); ?>index.php/registrar"><b>Crear Una</b></a></span>
		</div>
	</div>	
</div>


<div id="notificacion3" style="position: relative; top:-510px; background-color: #ff8b50; width:486px; height: 26px; color:white; font-size: 17px; padding-left: 10px; left: 26px; " class="notificacion3"> <b id="paso">Mensaje: </b> <span id="contenido">Registrate si no dispones de una cuenta <a href="<?php echo base_url(); ?>index.php/registrar"><b style="color: white">Crear Una</b></a></span></div>