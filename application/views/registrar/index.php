<div class="row" style="margin-top: 180px">
	<form method="post" action="<?php echo base_url(); ?>index.php/registrar/registro">
		<div class="col-md-offset-4 col-md-4 col-md-offset-4" style="background-color: white">
			<h3 style="text-align: center;">Registro Datos</h3>
			Cédula: <input style="border-color: #ff8b50;" class="form-control" type="text" name="cedula" required="" oninput="maxLengthCheck(this)" min="1" max="9999999999" onkeypress="return isNumeric(event)">
			<br>
			Nombres: <input style="border-color: #ff8b50;" class="form-control" type="text" name="nombres" maxlength="40" required="">
			<br>
			Contraseña: <input style="border-color: #ff8b50;" class="form-control" type="password" name="pass" required="">
			<br>
			<div style="text-align: center; margin-top: 20px">
				<input style="background-color: #ff8b50; color: white; padding-left: 50px; padding-right: 50px" class="button" type="submit" name="enviar" value="Continuar"> <br>
			</form>
		</div>
	</div>	
</div>