<script type="text/javascript">
	$(document).ready(function() {
		document.getElementById("notificacion").style.display="none";
		setTimeout(function() {
			$(".notificacion").fadeIn(1500);
		},1000);

		setTimeout(function() {
			$(".notificacion").fadeOut(1500);
		},7000);
		
	});
</script>