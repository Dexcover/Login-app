<div class="container" style="margin-top: 50px">
	

	<div class="row">
		<div class="col-md-4" >
			<div class="row">




				<div class="col-md-12">
					<?php if(isset($nombre)): ?>




						<span>USUARIO: </span> <input style="border-color: #ff8b50;" type="text" name="usuario" disabled="true" placeholder="<?php echo $nombre; ?>" class="form-control">
					</div>
				<?php endif ?>


			</div>

			<div class="row" style="text-align: center; margin-top: 10px">
				<div class="page-header">
					<h1 ><small id="enunciado">Selecciona 4 objetos, de los 6 que se presentan abajo</small></h1>
				</div>


			</div>

			<div class="row" style="text-align: center; margin-top: 20px">

				<div class="row">
					<div class="col-md-6">
						<img onclick="contar('drag1')" name="globo"  id="drag1" draggable="true" ondragstart="drag(event)" width="100" height="100" src="<?php echo base_url(); ?>public/imagenes/objetos/Globo.png">
					</div>
					<div class="col-md-6">

						<img onclick="contar('drag2');" name="vaso"  id="drag2" draggable="true" ondragstart="drag(event)"  width="100" height="100" src="<?php echo base_url(); ?>public/imagenes/objetos/Vaso.png">

					</div>
				</div>	
				<div class="row" style="margin-top: 50px">
					<div class="col-md-6">

						<img onclick="contar('drag3');" id="drag3" name="lampara" draggable="true" ondragstart="drag(event)" width="100" height="100" src="<?php echo base_url(); ?>public/imagenes/objetos/Lampara.png">


					</div>
					<div class="col-md-6">

						<img onclick="contar('drag4');"  id="drag4" name="escoba" draggable="true" ondragstart="drag(event)"   width="100" height="100" src="<?php echo base_url(); ?>public/imagenes/objetos/Escoba.png">

					</div>

				</div>	
				<div class="row" style="margin-top: 50px">
					<div class="col-md-6" >


						<img onclick="contar('drag5');" id="drag5" draggable="true" name="cuadro" ondragstart="drag(event)" width="100" height="100" src="<?php echo base_url(); ?>public/imagenes/objetos/Cuadro.png">


					</div>
					<div class="col-md-6">

						<img onclick="contar('drag6');"  id="drag6" draggable="true" name="tele" ondragstart="drag(event)"  width="100" height="100" src="<?php echo base_url(); ?>public/imagenes/objetos/Tele.png">

					</div>
				</div>	

			</div>

		</div>

		<div id="habitacion" class="col-md-8" style="display: block;   " >
			<div class="row" >
				<img style="border-color: #ff8b50; margin-left: 10px;padding-left: 9px;border-left-width: 1px;border-left-style: solid;border-top-width: 1px;border-top-style: solid;border-right-width: 1px;border-right-style: solid;border-bottom-width: 1px;border-bottom-style: solid;"  width="800" src="<?php echo base_url(); ?>public/imagenes/objetos/Habitacion.png">
			</div>

			<div class="row" style="text-align: center; margin-top: 10px">
				<input style="background-color: #ff8b50; color: white; padding-left: 50px; padding-right: 50px; margin-left: 50px" class="btn btn-default" type="button" name="enviar" onclick="enviar();" value="Aceptar">

				<input style="background-color: white; color: black; padding-left: 50px; padding-right: 50px; margin-left: 50px" class="btn btn-default" type="button" name="enviar" onclick="botonCancelar();" value="Cancelar">
			</div>
			<div id="posiciones" style="pointer-events:none;">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
				
				<div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
				<div id="div4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
				<div id="div5" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
				<div id="div6" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
			</div>
		</div>

	</div>	
</div>


<div id="notificacion" style="position: relative; top:-681px; background-color: #ff8b50; width:500px; height: 26px; color:white; font-size: 17px; padding-left: 10px; left: 26px; " class="notificacion"> <b id="paso">Paso 1: </b> <span id="contenido">Vamos a Verificar que eres el usuario de esta cuenta.</span></div>