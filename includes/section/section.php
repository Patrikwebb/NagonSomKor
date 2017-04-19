
<!--	section tagg.mall   För hemsidan Någon Som Kör(Ggb)	!-->

	<section>
		<div id="header">
			<img id="1" src="img/logga2.jpg" alt="bild saknas">
			<img id="2" src="img/logga3.jpg" alt="bild saknas">
		</div>
		<div id="logobar">
			<a id="canvasSVG" href="CanvasSVG.php">Canvas & SVG</a> 
			<a id="ajaxlänk" href="ajax.php">Ajax Lekstuga Kolla här :)</a> 
			<a href="logout.php">Logga ut</a> 
			<img src="img/fbicon.png" alt="bild saknas">
			<img src="img/mailicon.png" alt="bild saknas">
			<img src="img/phoneicon.png" alt="bild saknas">
		</div>
		<div id="meny">
			<ul>
					<li><a href="index.php">Start</a></li>
					<li><a href="services.php">Tjänster</a></li>
					<li><a href="booking.php">Bokningar</a></li>
					<li><a href="driver.php">Köra med oss</a></li>
					<li><a href="contact.php">Kontakt</a></li>
					<?php
							if (logged_in() === true){
								echo '<li><a href="login.php">Min Sida</a></li>';	
							} else	
								echo '<li><a href="login.php">Logga in</a></li>';
					?>
			</ul>
		</div>
	</section>
	
<script>
//Slider script för header bilderna

	$(document).ready(function Slider(){
		$("#header #1").show("fade",50);
		$("#header #1").delay(3000).hide("slide",{direction: 'left'},50);
		
		var sc = $("#header img").size();
		var count = 2;
		
		setInterval(function (){
			$("#header #"+count).show("slide",{direction: 'right'},50);
			$("#header #"+count).delay(3000).hide("slide",{direction: 'left'},50);
			
			if(count == sc){
				count = 1;
			}else{
				count = count + 1;	
			}
		},3050);
	});
</script>
