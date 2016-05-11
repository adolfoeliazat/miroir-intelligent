<head>
	<meta charset="utf-8">

</head>
<body>

<?php 

$dirname = "./";

/* LANGUE*/
$langue = $_POST["langue"];
$fichierouvert = fopen ($dirname.'langue.txt', "w+");
if ( !fwrite($fichierouvert, $langue)) {
  echo "Impossible d'écrire dans le fichier (langue)";
  exit;
}
fclose ($fichierouvert);

/* FORMAT*/
$format = $_POST["format"];
$fichierouvert = fopen ($dirname.'format.txt', "w+");
if ( !fwrite($fichierouvert, $format)) {
  echo "Impossible d'écrire dans le fichier (format)";
  exit;
}
fclose ($fichierouvert);

/* VILLE*/
$ville = $_POST["ville"];
$fichierouvert = fopen ($dirname.'ville.txt', "w+");
if ( !fwrite($fichierouvert, $ville)) {
  echo "Impossible d'écrire dans le fichier (ville)";
  exit;
}
fclose ($fichierouvert);


/*PAYS */
$pays = $_POST["pays"];
$fichierouvert = fopen ($dirname.'pays.txt', "w+");
if ( !fwrite($fichierouvert, $pays)) {
  echo "Impossible d'écrire dans le fichier (pays)";
  exit;
}
fclose ($fichierouvert);

/* NBR ENTREES*/
$nbr = $_POST["nbr"];
$fichierouvert = fopen ($dirname.'nbr.txt', "w+");
if ( !fwrite($fichierouvert, $nbr)) {
  echo "Impossible d'écrire dans le fichier (nbr)";
  exit;
}
fclose ($fichierouvert);

/* 
$ = $_POST[""];
$fichierouvert = fopen ($dirname.'.txt', "w+");
if ( !fwrite($fichierouvert, $)) {
  echo "Impossible d'écrire dans le fichier ()";
  exit;
}
fclose ($fichierouvert);


$ = $_POST[""];
$fichierouvert = fopen ($dirname.'.txt', "w+");
if ( !fwrite($fichierouvert, $)) {
  echo "Impossible d'écrire dans le fichier ()";
  exit;
}
fclose ($fichierouvert);


$ = $_POST[""];
$fichierouvert = fopen ($dirname.'.txt', "w+");
if ( !fwrite($fichierouvert, $)) {
  echo "Impossible d'écrire dans le fichier ()";
  exit;
}
fclose ($fichierouvert);


*/








//sleep(0,5);


/*REDIRECTION*/
header('Location: index.php');
exit()

?>


</body>