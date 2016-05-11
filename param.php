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
<div id="keyboard-wrapper">

<form method="post" action="transition.php"> <!--id="form_param" -->

		<strong class="medium">Global :</strong> <br />
		<label class="xxsmall ">Langue  <input type="text" id="langue" name="langue" class="keyboard ui-corner-all"  placeholder="Ex: fr, en, de, ..." /></label> <br />
		<label class="xxsmall">Format de l'heure  <input type="text" class="keyboard ui-corner-all" placeholder="Ex: 12 ou 24" /></label> <br />
		<br />
		<br />
	
		<strong class="medium">Météo :</strong> <br />
		<label class="xxsmall">Ville  <input  type="text" class="keyboard ui-corner-all"  placeholder="Entrez votre ville pour la météo" /></label> <br />
		<label class="xxsmall">Pays <input type="text" class="keyboard ui-corner-all" placeholder="Entrez votre pays pour la météo" /></label> <br />
		<label class="xxsmall">Clé APPID  <input type="text" class="keyboard ui-corner-all" placeholder="Entrez votre propre clé APPID" /></label> <br />
		<br />
		<br />

		<strong class="medium">Calendrier :</strong> <br />
		<label class="xxsmall">Nombre d'entrées  <input type="text" class="keyboard ui-corner-all" placeholder="Entrez le nombre de jour à afficher" /></label> <br />
		<label class="xxsmall">Charger un calendrier  <input type="text" class="keyboard ui-corner-all"  placeholder="Entrez l'url d'un calendrier .ics" /></label> <br />
		<br />
		<br />

		<input type="submit" value="Valider" > <!--onclick=" self.location='index.php'; " -->
</div>

	</form>
	<!--a href="index.php">coucou</a-->
	<script>
	/*	var form = document.getElementById('form_param');
		form.addEventListener('submit',function(e) {
			//alert("Valider ces paramètres ?");
			e.preventDefault();
		});
		
/*		var maj = function(fichier,id) {
			alert(fichier);
			alert(id);
			var fileSystem=new ActiveXObject("Scripting.FileSystemObject");
			var monfichier=fileSystem.OpenTextFile("'"+fichier+"'", 2 ,true);
			monfichier.WriteLine(Document.getElementById("'"+id+"'"));
			monfichier=fileSystem.OpenTextFile("'"+fichier+"'", 1 ,true);
			alert(fichier.ReadAll());
			monFichier.Close();
		}
*/
		$('.keyboard').keyboard({
	    usePreview: false,
	    position: {
	        of: '#keyboard-wrapper',
	        my: 'center top',
	        at: 'center bottom',
	        offset: '0 20'
	    }
		});


	</script>
	

</div>

</body>
</html>