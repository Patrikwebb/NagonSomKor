<?php include 'core/init.php'; ?>
<!DOCTYPE HTML>
<html lang="sv">	
	<?php include 'includes/head/head.php'; ?>
	<body onload="Slider();">
		<div id="wrapper">
			<?php include 'includes/section/section.php'; ?>
		<div id="content">
<!--	register.mall   För hemsidan Någon Som Kör(Ggb)	!-->
			<h3>Skapa Konto</h3>
			
				<form method="POST" action="" >
				
				Användarnamn: <br />
				<input type="text" name="user" id="user" /> <br />
				
				Lösenord: <br />
				<input type="password" name="pass" id="pass" /> <br />
				
				Förnamn: <br />
				<input type="text" name="first_name" id="first_name" /> <br />
				 
				Efternamn: <br />
				<input type="text" name="last_name" id="last_name" /> <br />                            
				 
				E-postadress: <br />
				<input type="text" name="email" id="email" /> <br />
				
				Person nummer: <br />
				<input type="text" name="pnumber" id="pnumber" /> <br />  

				Telefon nummer: <br />
				<input type="text" name="phonenr" id="phonenr" /> <br />  				
				 
				<input type="submit" name="skicka" id="skicka" value="Skapa konto" />
				 
				<input type="reset" name="rensa" id="rensa" value="Rensa" />
				 
				</form>
<?php

	if(isset($_POST['user'], $_POST['pass'],$_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['pnumber'], $_POST['phonenr'])) {
		$user = $_POST['user'];
		$pass = md5 ($_POST['pass']);
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$pnumber = $_POST['pnumber'];
		$phonenr = $_POST['phonenr'];
		$sql = "INSERT INTO `users`(`username`, `password`, `first_name`, `last_name`, `email`, `pnumber`, `phonenr`)
				VALUES ('$user', '$pass', '$first_name', '$last_name', '$email', '$pnumber', '$phonenr')";

		mysqli_query($mysqli_pekare, $sql);
	
		$error = false; 
		$success = false;
   
                if (!$error)
                {
                        $success = true;
                }
}
?>

<?php 
global $success;
if ($success)	{ ?>
			<h3>Välkommen till Någon som kör (Göteborg)</h3>
				<p>
				Tack för att du registrerat dig <?php echo $_POST["user"]; ?>! <br /> <br />
				Du har reggat dig med mail adressen: <?php echo $_POST["email"]; ?>.
				</p>
			<h3>Support</h3>
				<p>
				Har du några funderingar kan du alltid maila till oss.
				</p>
<?php } ?>	
		
		</div>	
			<?php include 'includes/article/article.php'; ?>
				<?php include 'includes/footer/footer.php'; ?>
		</div>	
	</body>
</html>
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