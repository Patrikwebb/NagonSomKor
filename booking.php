<?php include 'core/init.php'; ?>
<!DOCTYPE HTML>
<html lang="sv">	
	<?php include 'includes/head/head.php'; ?>
	<body onload="Slider();">
		<div id="wrapper">
			<?php include 'includes/section/section.php'; ?>
		<div id="content">
			<h3>Boka körning/tjänst</h3>
				<p>
				Här kommer finnas adress fält etc samt kommentar fält. Som man kan skicka ut till olika förare.
				</p>
				<form id="form" name="form" method="post" action="mailto:grovmalet1@live.se">
				<fieldset id="fieldset" style="width: 390px;">
				<legend>Kunduppgifter</legend>
				
				Förnamn: <br />
				<input type="text" name="fnamn" id="fnamn" /> <br />

				Efternamn: <br />
				<input type="text" name="enamn" id="enamn" /> <br />

				Gatuadress: <br />
				<input type="text" name="adress" id="adress" /> <br />
				
				Ort: <br />
				<input type="text" name="ort" id="ort" /> <br />				

				Meddelande: <br />
				<textarea name="meddelande" id="meddelande" cols="30" rows="3"></textarea> <br />
				
				Här kan du skriva vart du ska åka osv. <br />
				
				<input type="submit" name="skicka" id="skicka" value="Skicka meddelandet" />
				
				<input type="reset" name="rensa" id="rensa" value="Rensa" />
				
				</fieldset>
				</form>
			<h3>Kalender bokning</h3>
				<p>
				För att förtids boka en körning eller tjänst längre fram i tiden.
				</p>
			<h3>Miniräknare</h3>
				<p>Här kan ni räkna på ett ungefär vad eran resa kan kosta <br />
				   Man får räkna med 25kr/milen för bensin, försäkring, slit delar osv.</p>
				   
		<!--
		Här har lagt lagt in en miniräknare som jag läste om på nätet, jag förstår 
		hela funktionen, vad alla taggar gör. Men som sagt hade varit svårt att få det 
		fram själv i huvudet men det är ett sätt att lära sig på
		-->

			<form id="form_data" action="index.php" metod="post">
			<fieldset>
				Tal 1
				<input type="text" id="num1" /> <br />
												<br />
				<select id="sign">				<br />
					<option>Välj</option>
					<option id="plus" value="*">*</option>
					<option id="minus" value="/">/</option>
					<option id="ganger" value="-">-</option>
					<option id="delat" value="+">+</option>
				</select>
												<br />
												<br />
				Tal 2
				<input type="text" id="num2" />
												<br />
												<br />
				<input type="button" value="Calculate"  id="button" onclick="calc();" />
				
				<br />
				<br />
				Result: 
				<input type="text" id="result" />
			</fieldset>
			</form>
		</div>
			<?php include 'includes/article/article.php'; ?>
				<?php include 'includes/footer/footer.php'; ?>
		</div>	
	</body>
</html>
<script type="text/JavaScript">
	$(document).ready(function(){
	$("input, textarea").focus(function(){
	$(this).css("background-color","#cccccc");
		});
	$("input, textarea").blur(function(){
	$(this).css("background-color","#ffffff");
		});
		});
</script>
<script type="text/JavaScript"> 
	function calc(){
		var num1, num2;
		var sign = "+";
		var result;

	function getNum1(){
		num1 = document.getElementById('num1').value;
		return Number(num1);
	}
	function getNum2(){
		num2 = document.getElementById('num2').value;
		return Number(num2);
	}
	function getSign(){
		sign = document.getElementById('sign').value;
		return sign;
	}
	function setResult(){
		document.getElementById('result').value = result;
	}
	function doCalc(){
		var num1 = getNum1 ();
		var num2 = getNum2 ();
		
		if(getSign() == "*"){
			result = num1 * num2;
		}else if(getSign() == "/"){
			result = num1 / num2;
		}else if(getSign() == "-"){
			result = num1 - num2;
		}else{
			result = num1 + num2;
		}
		
		setResult();
	}
	doCalc();
		
	}
</script>
