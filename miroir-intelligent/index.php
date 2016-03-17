<html>
<head>
	<title>Mirroir intelligent</title>
	<style type="text/css">
		<?php include('css/main.css') ?>
	</style>
	<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<script type="text/javascript" src="js/menu/menu.js"></script>
	<meta name="google" value="notranslate" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
<body>

	<div class="top right">
		<div class="windsun small dimmed" id="meteo1"></div>
		<div class="temp" id="meteo2"></div>
		<div class="forecast small dimmed" id="meteo3"></div>
	</div>
	<div class="top left">
		<div class="date small dimmed" id="jour"></div>
		<div class="time" id="time"></div>
		<div class="calendar xxsmall" id="agenda"></div>
	</div>
	<div class="lower-third center-hor">
		<div class="compliment light" id="compliment"></div>
	</div>
	<div class="bottom center-hor"><div class="news medium" id="journal"></div>
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

<div class="small dimmed top center-hor"><div id="menu">
	<div class="menu" id="menu1" onclick="afficheMenu(this)">
		<span href="#"class= "fa fa-bars"></span>
	</div>
	<div id="sousmenu1" style="display:none">
		<div class="sousmenu" id="menuT" onclick="afficheMenu(this)">
			<a href="#">Time</a>
		</div>
		<div id="sousmenuT" style="display:none">
			<div class="ssmenu" onclick="afficheTime(jour)">
			<a href="#">date</a>
			</div>
		
			<div class="ssmenu" onclick="afficheCalendar(agenda)">
			<a href="#">calendrier</a>
			</div>
		</div>
		<div class="sousmenu" id="menuW" onclick="afficheMenu(this)">
			<a href="#">Méteo</a>
		</div>
		<div id="sousmenuW" style="display:none">
			<div class="ssmenu" onclick= "afficheWeatherW(meteo1)">
			<a href="#">Info</a>
			</div>
			<div class="ssmenu" onclick= "afficheWeatherT(meteo2)">
			<a href="#">Temperature</a>
			</div>
			<div class="ssmenu" onclick= "afficheWeatherP(meteo3)">
			<a href="#">Prevision</a>
			</div>
		</div>
		<div class="sousmenu" onclick="afficheNews(journal)">
			<a href="#">Nouvelle</a>
		</div>

		<div class ="sousmenu" onclick="afficheCompliment(compliment)">
			<a href="#">Compliment</a>
		</div>
	</div>
</div></div>

<?php  include(dirname(__FILE__).'/controllers/modules.php');?>
</body>
</html>
