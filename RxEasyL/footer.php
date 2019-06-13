<script src="<?php echo base_url(); ?>bootstrap/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/chart-data.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/easypiechart.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		<script type="text/javascript">
		function ConfirmDemo() {
		//Ingresamos un mensaje a mostrar
		var mensaje = confirm("¿Seguro que deseas Eliminar?");
		//Detectamos si el usuario acepto el mensaje
		if (mensaje) {
		alert("¡Gracias por aceptar!");
		}
		//Detectamos si el usuario denegó el mensaje
		else {
		alert("¡Haz denegado el mensaje!");
		}
		}
	</script>
		
</body>
</html>