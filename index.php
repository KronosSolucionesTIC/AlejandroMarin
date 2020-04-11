<!DOCTYPE html>
<html>
<head>
	<title>Alejandro Marin</title>
	<script type="text/javascript" src="librerias/jquery.js"></script>
</head>
<body>
	<h1>Esta es la segunda reunion</h1>
	<div id="contenedor">
  		Click aqui
	</div>
</body>
	<script type="text/javascript">
		$("#contenedor").click(function() {
  			console.log("Hizo click");
		});
	</script>
</html>