<html>
<head>
	<title>Miroir intelligent</title>
	<style type="text/css">
		<?php include('css/main.css') ?>
	</style>
	<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<script type="text/javascript" src="js/menu/menu.js"></script>
	<!--script type="text/javascript" src="js/bouton.js"></script-->
	<meta name="google" value="notranslate" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" href="data:;base64,iVBORw0KGgo=">

<!--KEYBOARD-->
	<!-- jQuery (required) & jQuery UI + theme (optional) -->
	<link href="docs/css/jquery-ui.min.css" rel="stylesheet">
	<script src="docs/js/jquery-latest.min.js"></script>
	<script src="docs/js/jquery-ui.min.js"></script>
	<script src="docs/js/jquery-migrate-1.3.0.min.js"></script>

	<!-- keyboard widget css & script (required) -->
	<link href="css/keyboard.css" rel="stylesheet">
	<script src="js/jquery.keyboard.js"></script>
	
	<!-- options -->
	<script src="docs/js/demo.js"></script>
	<!--link href="docs/css/demo.css" rel="stylesheet"-->




</head>


<body>
<!--******************************-->
<!-- Affichage widgets-->

	<div class="top right" >
		<div class="windsun small dimmed" id="meteo1"></div> 
		<div class="temp" id="meteo2"></div>
		<div class="forecast small dimmed" id="meteo3"></div>
	</div>
	<div class="top left">
		<div class="date small dimmed" id="jour" ></div>
		<div class="time" id="time" ></div>
		<!--span style="display:none"--><div class="calendar xxsmall" id="agenda" ></div>
	</div>
	<div class="lower-third center-hor">
		<div class="compliment light" id="jolie"></div>
	</div>
	<div class="bottom center-hor">
		<div class="news medium" id="journal"></div>
	</div>

</div>


<script src="js/jquery.js"></script>
<script src="js/jquery.feedToJSON.js"></script>
<script src="js/ical_parser.js"></script>
<script src="js/moment-with-locales.min.js"></script>
<script src="js/config.js"></script>
<script src="js/rrule.js"></script>
<!--<script src="js/version/version.js"></script>-->
<script src="js/calendar/calendar.js"></script>
<script src="js/compliments/compliments.js"></script>
<script src="js/weather/weather.js"></script>
<script src="js/time/time.js"></script>
<script src="js/news/news.js"></script>
<script src="js/main.js?nocache=<?php echo md5(microtime()) ?>"></script>
<!-- <script src="js/socket.io.min.js"></script> -->

<!--*******************************-->
<!-- Fonction bouton on/off-->
<script type="text/javascript">
/*configuration des url des images*/
var image_on="./js/b1.resized.jpg";
var image_off="./js/b2.resized.jpg";
var image_cache="./js/b0.resized.png";
//cependant il est préférable de mettre les valeurs de ces images en dur dans le code (si elles ne sont pas destinées à être changées)
/**************/
	
function generate_button(){
	//cette fonction doit être appelée au chargement de la page
	//permet de remplacer tous les input ayant pour class "button_on_off" par ce système de bouton
	
	var button,image1,image2,element;
	var alls=document.getElementsByTagName("input");
	var i=0,li=alls.length;
	while(i<li){
		if((element=alls[i]).className==="button_on_off"){
			element.type="hidden";
			button=document.createElement("div"); //creation de l'element contenant le tout
			button.title=element.title;
			button.style.display="inline";
			button.style.position="relative";
			image1=document.createElement("img"); //creation de l'image de fond
			if(element.value==="on"){
				image1.src=image_on;
				element.value="off"; //car il sera activé plus tard
			}else{
				image1.src=image_off;
				element.value="on"; //car il sera desactivé plus tard
			}
			image1.style.position="relative";
			button.appendChild(image1);
			image2=document.createElement("img"); //creation de l'image représentant le cache
			image2.src=image_cache;
			image2.style.position="absolute";
			button.appendChild(image2);
			button.onclick=switch_button(element,image1,image2);
			image1.onload=button.onclick; //afin de placer le cache au bon endroit (attention cela inverse la valeur)
			element.parentNode.insertBefore(button,element);
		}
		i++;
	}
	
}
function  switch_button(elem_source,elem_button,elem_cache) {
	//permet de gérer les commutations
	var cible=0;
	function move(dx,i){
	//fonction encapsulée qui sert à gérer l'animation du cache et le changement d'image du bouton
		if(i===5){
			//changement d'image
			if(elem_source.value==="on"){
				elem_button.src=image_on;
			}else{
				elem_button.src=image_off;
			}
		}
		if(i<10){
			//animation
			elem_cache.style.left=(parseInt(elem_cache.style.left,10)+dx)+"px";
			setTimeout(function(){move(dx,++i);},30);
		}else{
			elem_cache.style.left=cible+"px";
		}
	}
	return function(){
		//fonction lancée lorsqu'on clique sur le bouton. Elle change la valeur du input et lance l'animation
		if(elem_button.onload){elem_button.onload=null;}
		if(elem_source.value==="on"){
			elem_source.value="off";
			cible=0;
		}else{
			elem_source.value="on";
			cible=parseInt(elem_button.offsetWidth,10)-parseInt(elem_cache.offsetWidth,10);
		}
		var dx=(cible-parseInt(elem_cache.style.left,10))/10;
		move(dx,1);
	}
}

window.onload=generate_button;

</script>

<script type="text/javascript">
	//afficheTime(jour);
	//afficheTime(agenda);
	//afficheWeather(meteo1);
	//afficheWeather(meteo2);
	//afficheWeather(meteo3);
	//afficheCompliment(jolie);
	//afficheNews(journal);
/*	alert(config.weather.params.city);
	alert(config.weather.params.country);
	alert(config.weather.params.q);
*/
</script>


<!--*************************************-->
<!--MENU deroulant-->

<div class="small dimmed top center-hor"><div id="menu">
	<div class="menu" id="menu1" onclick="afficheMenu(this)">
		<span href="#"class= "fa fa-bars"></span>
	</div>

<!-- Menu Time-->
	<div id="sousmenu1" style="display:none">
		<div class="sousmenu" id="MenuTime" onclick="afficheMenu(this)">
			<div  class="xxsmall fa fa-clock-o"><span class="ligne espace"><a href="#">Horloge</a></span></div>
		</div>
			<div id="sousMenuTime" style="display:none">
				<div class="ssmenu" >
					<span class="ligne">Date<span class="espaceT1" onclick="afficheTime(jour)">	<input type="checkbox" class="button_on_off" value="on"> </span></span>
				</div>
				<div class="ssmenu">
					<span class="ligne">Calendrier <span class="espaceT2"  onclick="afficheTime(agenda)"><input type="checkbox" class="button_on_off" value="on"></span></span>
				</div>
			</div>
<!-- Menu Meteo-->
		<div class="sousmenu" id="MenuWeather" onclick="afficheMenu(this)"> 
			<div class="small fa fa-cloud"><span class="ligne espace"><a href="#">Météo</a></span></div>
		</div>
			<div id="sousMenuWeather" style="display:none">
				<div class="ssmenu" >
					<span class="ligne">Info <span class="espaceW1" onclick="afficheWeather(meteo1)"><input type="checkbox" class="button_on_off" value="on"></span></span>
				</div>
				<div class="ssmenu" >
					<span class="ligne">Température <span class="espaceW2" onclick="afficheWeather(meteo2)"><input type="checkbox" class="button_on_off" value="on"></span></span>
				</div>
				<div class="ssmenu" >
					<span class="ligne">Prévision <span class="espaceW3" onclick="afficheWeather(meteo3)"><input type="checkbox" class="button_on_off" value="on"></span></span>
				</div>
			</div>
<!-- Menu compliment -->
		<div class="sousmenu" id="MenuCompliment" onclick="afficheMenu(this)">
			<div class="fa fa-comment"><span class="ligne espace"><a href="#">Compliment</a></span></div>
		</div>
			<div id="sousMenuCompliment" style="display:none">
				<div class="ssmenu">
					<span class="ligne">Compliment <span class="espaceC" onclick="afficheCompliment(jolie)"><input type="checkbox" class="button_on_off" value="on"></span></span>
				</div>
			</div>
<!-- Menu News-->
		<div class="sousmenu" id="MenuNews" onclick="afficheMenu(this)">
			<div class="fa fa-rss-square"><span class="ligne espace"><a href="#">News</a></span></div>
		</div>
			<div id="sousMenuNews" style="display:none">
				<div class="ssmenu">
					<span class="ligne">News<span class="espaceN" onclick="afficheNews(journal)"><input type="checkbox" class="button_on_off" value="on"></span></a></span>
				</div>
			</div>
<!--Parametres-->
			<div class="sousmenu" id="MenuParam" onclick="afficheMenu(this)">
				<div class="fa fa-cog"><span class="ligne espace"><a href="./param.php">Paramètres</a></span></div>
			</div>
				<!--div id="sousMenuParam" style="display:none">
					<div class="ssMenu">
						<div  class="fa fa-caret-right"><span class="ligne espace"><a href="./param.php">Modifier les paramètres</div><span class="ligne">(ouvre une nouvelle page)</a></span></span>
					</div>
				</div-->
<!--recherche-->
<!--				<div class="sousmenu" id="MenuGoogle" onclick="afficheMenu(this)">
					<div class="fa fa-search"><span class="ligne espace"><a href="#">Recherche</a></span></div>
				</div>
					<div id="sousMenuGoogle" style="display:none">
						<div class="ssMenu">
						<span class="ligne espace"><script>
							  (function() {
							    var cx = '009970051627960980923:11dv60vxohc';
							    var gcse = document.createElement('script');
							    gcse.type = 'text/javascript';
							    gcse.async = true;
							    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
							    var s = document.getElementsByTagName('script')[0];
							    s.parentNode.insertBefore(gcse, s);
							  })();
							</script>
							<gcse:search></gcse:search>
						</span>
						</div>
					</div>

-->
</div></div>



<?php  include(dirname(__FILE__).'/controllers/modules.php');?>


</body>
</html>
