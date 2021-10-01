<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="../CSS/flexslider.css" type="text/css">
		<script src="../js/jquery-1.6.2.min.js"></script>
		<script src="../js/jquery.flexslider.js"></script>
		<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
		$('.flexslider').flexslider();
		});
		</script>
		<link rel="stylesheet" type="text/css" href="../CSS/horizontal.css">
		<script src="../js/horizontal-scroll.js"></script>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	
		<title>Förderverein der Berufsschule Freising</title>
	</head>
	<body>
		<ul id="nav">
			<li class="border-fade"><a class="navigationsleiste" href="#startseite">Startseite</a></li>|
			<li class="border-fade"><a class="navigationsleiste" href="#vorstand">Vorstand</a></li>|
			<li class="border-fade"><a class="navigationsleiste" href="#projekte">Projekte</a></li>|
			<li class="border-fade"><a class="navigationsleiste" href="#sponsoren">Sponsoren</a></li>|
			<li class="border-fade"><a class="navigationsleiste" href="#mitgliedschaften">Mitgliedschaften</a></li>|
			<li class="border-fade"><a class="navigationsleiste" href="#kontakt">Kontakt</a></li>|
			<li class="border-fade"><a class="navigationsleiste" href="#impressum">Impressum</a></li>
			<hr />
			<hr class="klein" />
		</ul>
		<footer id="zurueck">
			<a id="white" href="http://www.berufsschule-freising.de/">Zurück zu http://www.berufsschule-freising.de/</a>
		</footer>
		<footer id="copyright">
			<?php $jahr= date("Y");
			echo "© $jahr Magdalena Rittershofer und Christopher Ecker.</br>Foto: <i>'Freising Panorama'</i> von Peter Walter" 
			?>
		</footer>
		<div id="vert"></div>
		<div id="content">
			<section id="startseite">
				<?php include ("startseite.php")?>
			</section>
			<section id="vorstand">
				<?php include ("vorstand.php") ?>
			</section>
			<section id="projekte">
				<?php include ("projekte.php") ?>	
			</section>
			<section id="sponsoren">
				<?php include ("sponsoren.php") ?>	
			</section>
			<section id="mitgliedschaften">
				<?php include ("mitgliedschaften.php") ?>
			</section>
			<section id="kontakt">
				<?php include("kontakt.php") ?>
			</section>
			<section id="impressum">
				<?php include("impressum.php") ?>
			</section>
		</div>
	</body>
</html>