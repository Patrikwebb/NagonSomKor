<?php include 'core/init.php'; ?>
<!DOCTYPE HTML>
<html lang="sv">	
	<?php include 'includes/head/head.php'; ?>
	<body onload="Slider();">
		<div id="wrapper">
			<?php include 'includes/section/section.php'; ?>
		<div id="content">
			<h3>Kontakt formulär</h3>
				<form id="form" name="form" method="post" action="#" onsubmit="return validateForm()" enctype="text">
				
				Förnamn: <br />
				<input type="text" name="fnamn" id="fnamn" /> <br />

				Efternamn: <br />
				<input type="text" name="enamn" id="enamn" /> <br />

				E-postadress: <br />
				<input type="text" name="epost" id="epost" /> <br />

				Meddelande: <br />
				<textarea name="meddelande" id="meddelande" cols="45" rows="5"></textarea> <br />
				
				<input type="submit" name="skicka" id="skicka" value="Skicka meddelandet" />
				
				<input type="reset" name="rensa" id="rensa" value="Rensa" />
			
				</form>		
		</div>		
			<?php include 'includes/article/article.php'; ?>
				<?php include 'includes/footer/footer.php'; ?>
		</div>	
	</body>
</html>
<!-- Jag tycker att det borde funka att bara kopiera scriptet men den vill bara använda sig utav den sista funktionen -->
<script>    
function validateForm() {
    var x=document.getElementById("fnamn").value;
    if (x == null || x == "") {
        alert("Du måste fylla i förnamn");
        return false;
    }
}  
</script>
<script>    
function validateForm() {
    var x=document.getElementById("enamn").value;
    if (x == null || x == "") {
        alert("Du måste fylla i efternamn");
        return false;
    }
}  
</script>
<script>    
function validateForm() {
    var x=document.getElementById("epost").value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Du har skrivit in fel E-postadress");
        return false;
    }
}
</script>	
<script>
	$(document).ready(function(){
	$("input, textarea").focus(function(){
	$(this).css("background-color","#cccccc");
		});
	$("input, textarea").blur(function(){
	$(this).css("background-color","#ffffff");
		});
		});
</script>