
<div class="container">
<div class="jumbotron">
		<?php if(isset($nombre)){ ?>

  			<h1 style="font-size: 31px; color: orange">Bienvenido <font style="font-size: 31px; color: black"><?php echo $nombre; ?></font></h1>

  			<p>gracias por confiar en nuestro sistema de autenticación.</p>

  	<?php }else{ ?>
  
  		<h1 style="font-size: 31px; color: orange">Registrado <font style="font-size: 31px; color: black">Correctamente</font></h1>

  			<p>Usted se ha registrado con el mejor sistema de autenticación de usuarios.</p>
  			<p>>Encripatamiento de máxima seguridad</p>
  			<p>>Protegido con un patrón de 256 bits codificado. </p>

<?php } ?>

  <p><a class="btn btn-primary btn-lg" href="<?php echo base_url(); ?> " role="button">Cerrar Sesión</a></p>
</div>

</div>
