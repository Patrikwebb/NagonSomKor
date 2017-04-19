
<!--	register.mall   För hemsidan Någon Som Kör(Ggb)	!-->
<?php
	if (logged_in()){
		echo 'Logga ut för att registrera nytt konto';
	} else {
		echo  
		
			'<h3>Skapa Konto</h3>
			
				<form method="POST" action="" >
				
				Användarnamn: <br />
				<input type="text" name="user" id="username" /> <br />
				
				Lösenord: <br />
				<input type="password" name="pass" id="password" /> <br />
				
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
				 
				</form>';
	}
?>
<?php
	global $mysqli_pekare;
	if(isset($_POST['username'], $_POST['password'],$_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['pnumber'], $_POST['phonenr']))
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$pnumber = $_POST['pnumber'];
		$phonenr = $_POST['phonenr'];
		$sql = "INSERT INTO `users`(`username`, `password`, `first_name`, `last_name`, `email`, `pnumber`, `phonenr`)
				VALUES ('$username', '$password', '$first_name', '$last_name', '$email', '$pnumber', '$phonenr')";

		mysqli_query($mysqli_pekare, $sql);
	}
        $error = false;
        $success = false;
 
        if(isset($_POST['username'], $_POST['password'],$_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['pnumber'], $_POST['phonenr']))
        {
                // Här validerar du informationen,
                // etc kollar att mail o allt fungerar
 
                // Sen skriver du in allt i databasen om ingen
                // error har uppståt
                if (!$error)
                {
                        $success = true;
                }
        }  
?>

<!-- Om all min info skrivits in och gått igenom så kommer det att bli sant och denna informationen kommer visas !-->

<?php if ($success) { ?>
			<h3>Välkommen till Någon som kör (Göteborg)</h3>
				<p>
				Tack för att du registrerat dig <?php echo $_POST["username"]; ?>! <br /> <br />
				Du har reggat dig med mail adressen: <?php echo $_POST["mail"]; ?>.
				</p>
			<h3>Support</h3>
				<p>
				Har du några funderingar kan du alltid maila till oss.
				</p>
<?php } ?>		
