
</body>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.min.js " ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/bootstrap.min.js " ></script>
<script type="text/javascript">
	function activar(){
		setTimeout(function() {
			$(".notificacion").fadeIn(1500);
		},1000);


	}

	function activar2(){
		setTimeout(function() {
			$(".notificacion2").fadeIn(1500);
		},1000);


	}
</script>


<script>
	var pasadas=3;
	var cI=0;
	var seleccionados=[];
	function allowDrop(ev) {
		ev.preventDefault();
	}

	function drag(ev) {
		ev.dataTransfer.setData("text", ev.target.id);
	}

	function drop(ev) {
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");
		ev.target.appendChild(document.getElementById(data));
	}


	function mostrar(){
		document.getElementById('paso').innerHTML="Paso 2: ";

		document.getElementById('notificacion').style.width = "600px";
		document.getElementById('notificacion').style.top = "-631px";
		document.getElementById('habitacion').style.display = "block";
		document.getElementById('posiciones').style.pointerEvents = "all";
		activar();
		document.getElementById('contenido').innerHTML="Ubica las imágenes escojidas en la posición cuando te registraste";
		document.getElementById('enunciado').innerHTML="Ubica los objetos en la habitación";
		var bt="drag1";
		var pass=false;
		for (var i = 0; i < seleccionados.length; i++) {
			if(bt.localeCompare(seleccionados[i]) ==0) {
				pass=true;
			}
		};

		if(!pass){
			document.getElementById(bt).style.display = "none";
		}



		var bt="drag2";
		var pass=false;

		for (var i = 0; i < seleccionados.length; i++) {
			if(bt.localeCompare(seleccionados[i]) ==0) {

				pass=true;
			}
		};

		if(!pass){
			document.getElementById(bt).style.display = "none";
		}


		var bt="drag3";
		var pass=false;
		for (var i = 0; i < seleccionados.length; i++) {
			if(bt.localeCompare(seleccionados[i]) ==0) {

				pass=true;
			}
		};

		if(!pass){
			document.getElementById(bt).style.display = "none";
		}




		var bt="drag4";
		var pass=false;
		for (var i = 0; i < seleccionados.length; i++) {
			if(bt.localeCompare(seleccionados[i]) ==0) {

				pass=true;
			}
		};

		if(!pass){
			document.getElementById(bt).style.display = "none";
		}


		var bt="drag5";
		var pass=false;
		for (var i = 0; i < seleccionados.length; i++) {
			if(bt.localeCompare(seleccionados[i]) ==0) {

				pass=true;
			}
		};


		if(!pass){
			document.getElementById(bt).style.display = "none";
		}


		var bt="drag6";
		var pass=false;
		for (var i = 0; i < seleccionados.length; i++) {
			if(bt.localeCompare(seleccionados[i]) ==0) {

				pass=true;
			}
		};


		if(!pass){
			document.getElementById(bt).style.display = "none";
		}


	}




	function mostrar2(){
		document.getElementById('paso2').innerHTML="Paso 2: ";

		document.getElementById('notificacion2').style.width = "570px";
		document.getElementById('notificacion2').style.top = "-631px";
		document.getElementById('posiciones').style.pointerEvents = "all";
		activar2();
		document.getElementById('contenido2').innerHTML="Ubica las imágenes escojidas en la habitación, será tu patrón.";
		document.getElementById('enunciado').innerHTML="Ubica los objetos en la habitación";


		var bt="drag1";
		var pass=false;
		for (var i = 0; i < seleccionados.length; i++) {
			if(bt.localeCompare(seleccionados[i]) ==0) {
				pass=true;
			}
		};

		if(!pass){
			document.getElementById(bt).style.display = "none";
		}



		var bt="drag2";
		var pass=false;

		for (var i = 0; i < seleccionados.length; i++) {
			if(bt.localeCompare(seleccionados[i]) ==0) {

				pass=true;
			}
		};

		if(!pass){
			document.getElementById(bt).style.display = "none";
		}


		var bt="drag3";
		var pass=false;
		for (var i = 0; i < seleccionados.length; i++) {
			if(bt.localeCompare(seleccionados[i]) ==0) {

				pass=true;
			}
		};

		if(!pass){
			document.getElementById(bt).style.display = "none";
		}




		var bt="drag4";
		var pass=false;
		for (var i = 0; i < seleccionados.length; i++) {
			if(bt.localeCompare(seleccionados[i]) ==0) {

				pass=true;
			}
		};

		if(!pass){
			document.getElementById(bt).style.display = "none";
		}


		var bt="drag5";
		var pass=false;
		for (var i = 0; i < seleccionados.length; i++) {
			if(bt.localeCompare(seleccionados[i]) ==0) {

				pass=true;
			}
		};


		if(!pass){
			document.getElementById(bt).style.display = "none";
		}


		var bt="drag6";
		var pass=false;
		for (var i = 0; i < seleccionados.length; i++) {
			if(bt.localeCompare(seleccionados[i]) ==0) {

				pass=true;
			}
		};


		if(!pass){
			document.getElementById(bt).style.display = "none";
		}


	}




	function contar(id){
		var pass=false;
		for (var i = 0; i < seleccionados.length; i++) {
			if(id.localeCompare(seleccionados[i]) ==0) {
				pass=true;
			}
		};

		if(!pass){
			cI++;
			seleccionados.push(id);
			document.getElementById(id).style.borderBottom = "thick solid #ff8b50";


		}

		if(cI==4){
			mostrar();
		}

	}

	function contar2(id){
		var pass=false;
		for (var i = 0; i < seleccionados.length; i++) {
			if(id.localeCompare(seleccionados[i]) ==0) {
				pass=true;
			}
		};

		if(!pass){
			cI++;
			seleccionados.push(id);
			document.getElementById(id).style.borderBottom = "thick solid #ff8b50";


		}

		if(cI==4){
			mostrar2();
		}

	}



	function enviar(){
		var control1=false;

		if(document.getElementById('div1').firstChild==null && document.getElementById('div2').firstChild==null && document.getElementById('div3').firstChild==null && document.getElementById('div4').firstChild==null && document.getElementById('div5').firstChild==null && document.getElementById('div6').firstChild==null){
			alert("Ubica los objetos seleccionados en la habitación.")
			control1=true;
		}


		var dato1, dato2,dato3,dato4,dato5,dato6;
		if( document.getElementById('div1').firstChild!==null){
			dato1=document.getElementById('div1').firstChild.name
		}else{
			dato1="null";	
		}

		if( document.getElementById('div2').firstChild!==null){
			dato2=document.getElementById('div2').firstChild.name
		}else{
			dato2="null";	
		}

		if( document.getElementById('div3').firstChild!==null){
			dato3=document.getElementById('div3').firstChild.name
		}else{
			dato3="null";	
		}

		if( document.getElementById('div4').firstChild!==null){
			dato4=document.getElementById('div4').firstChild.name
		}else{
			dato4="null";	
		}
		if( document.getElementById('div5').firstChild!==null){
			dato5=document.getElementById('div5').firstChild.name
		}else{
			dato5="null";	
		}
		if( document.getElementById('div6').firstChild!==null){
			dato6=document.getElementById('div6').firstChild.name
		}else{
			dato6="null";	
		}


		if (!control1) {



			var parametros={
				'dato1': dato1,
				'dato2': dato2,
				'dato3': dato3,
				'dato4': dato4,
				'dato5': dato5,
				'dato6': dato6
			};

			$.ajax({

				data: parametros,
				url: '<?php echo base_url(); ?>index.php/autenticar/validar',
				type: 'post',
				success: function(response){
					if(response.localeCompare("true")==0){
						alert("Usuario Autenticado Exitosamente");

						window.open('home','_self');
					}else{
						if(pasadas==1){
							window.open('index','_self');
						}else
						alert("Error de Autenticación. Tienes: "+(pasadas-1)+ " veces para lograrlo!");

						pasadas=pasadas-1;
					}
			//window.open('home');
		}
	});

	}//cierre de control1


}


function enviarRegistro(){
	var control1=false;

	if(document.getElementById('div1').firstChild==null && document.getElementById('div2').firstChild==null && document.getElementById('div3').firstChild==null && document.getElementById('div4').firstChild==null && document.getElementById('div5').firstChild==null && document.getElementById('div6').firstChild==null){
		alert("Ubica los objetos seleccionados en la habitación.")
		control1=true;
	}

	var dato1, dato2,dato3,dato4,dato5,dato6;
	if( document.getElementById('div1').firstChild!==null){
		dato1=document.getElementById('div1').firstChild.name
	}else{
		dato1="null";	
	}

	if( document.getElementById('div2').firstChild!==null){
		dato2=document.getElementById('div2').firstChild.name
	}else{
		dato2="null";	
	}

	if( document.getElementById('div3').firstChild!==null){
		dato3=document.getElementById('div3').firstChild.name
	}else{
		dato3="null";	
	}

	if( document.getElementById('div4').firstChild!==null){
		dato4=document.getElementById('div4').firstChild.name
	}else{
		dato4="null";	
	}
	if( document.getElementById('div5').firstChild!==null){
		dato5=document.getElementById('div5').firstChild.name
	}else{
		dato5="null";	
	}
	if( document.getElementById('div6').firstChild!==null){
		dato6=document.getElementById('div6').firstChild.name
	}else{
		dato6="null";	
	}

	if(!control1){
		var parametros={
			'dato1': dato1,
			'dato2': dato2,
			'dato3': dato3,
			'dato4': dato4,
			'dato5': dato5,
			'dato6': dato6
		};

		$.ajax({

			data: parametros,
			url: '<?php echo base_url(); ?>index.php/registrar/paso2',
			type: 'post',
			success: function(response){
				if(response.localeCompare("true")==0){
					alert("Usuario Registrado Exitosamente");

					window.open('home','_self');
				}else{
					alert("Error de Registro.");
					window.open('index','_self');
				}
			//window.open('home');
		}
	});

	}

}

function botonCancelar(){
	if(confirm("¿Realmente desea salir?")){
		window.open('destruir','_self');
	}
}

</script>

<script type="text/javascript">
	function maxLengthCheck(object) {
		if (object.value.length > object.max.length)
			object.value = object.value.slice(0, object.max.length)
	}

	function isNumeric (evt) {
		var theEvent = evt || window.event;
		var key = theEvent.keyCode || theEvent.which;
		key = String.fromCharCode (key);
		var regex = /[0-9]/;
		if ( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) theEvent.preventDefault();
		}
	}
</script>

</html>