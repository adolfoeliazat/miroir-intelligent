<html>
<head>
	<meta charset="utf-8">

	<title>Paramètres</title>

	<style type="text/css">
		<?php include('css/main.css') ?>
	</style>
		<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<script type="text/javascript" src="js/menu/menu.js"></script>

	<script src="js/config.js"></script>

	<!--script type="text/javascript" src="js/bouton.js"></script-->
	<meta name="google" value="notranslate" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" href="data:;base64,iVBORw0KGgo=">

	<!-- jQuery (required) & jQuery UI + theme (optional) -->
	<link href="docs/css/jquery-ui.min.css" rel="stylesheet">
	<script src="docs/js/jquery-latest.min.js"></script>
	<script src="docs/js/jquery-ui.min.js"></script>
	<script src="docs/js/jquery-migrate-1.3.0.min.js"></script>

	<!-- keyboard widget css & script (required) -->
	<link href="css/keyboard.css" rel="stylesheet">
	<script src="js/jquery.keyboard.js"></script>
	<script src="docs/js/demo.js"></script>
	<link href="docs/css/demo.css" rel="stylesheet">

</head>

<body>

<div class="left light medium">

	<form id="form_param" action="index.php" >

		<span>Global :</span> <br/><br/>
		<label class="small">Langue  <input id="text" type="text" placeholder="..." /></label>
		<br />

		<br/>


		<input type="submit" value="Valider" onclick="maj();">

	</form>
	<!--a href="index.php">coucou</a-->
	
	<script>
		var form = document.getElementById('form_param');

		form.addEventListener('submit',function(e) {
		//alert("Valider ces paramètres ?");

		e.preventDefault();
		});

		function maj(){
		config.lang = document.getElementById('text').value;


		console.log("test");
		}



	</script>
	

</div>

</body>
</html>