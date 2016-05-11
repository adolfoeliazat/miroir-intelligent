<head>
	<meta charset="utf-8">

</head>
<body>

<?php 

$dirname = "./";

$langue = $_POST["langue"];
//Ouverture du répertoire de destination
$fichierouvert = fopen ($dirname.'langue.txt', "w+");
//Copie du fichier
if ( !fwrite($fichierouvert, $langue)) {
  echo "Impossible d'écrire dans le fichier ($filename)";
  exit;
}
//Fermeture du fichier
fclose ($fichierouvert);

header('Location: index.php');
exit()

?>


</body>