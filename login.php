<?php include 'core/init.php'; ?>
<!DOCTYPE HTML>
<html lang="sv">	
	<?php include 'includes/head/head.php'; ?>
	<body onload="Slider();">
		<div id="wrapper">
			<?php include 'includes/section/section.php'; ?>
		<div id="content">
				<?php include 'includes/meny/login.php'; ?>
<?php

	if (empty($_POST) === false) {
	 
    $username = $_POST['username']; 
    $password = $_POST['password'];
	
	if(empty($username) == true || empty($password) === true) {
		$errors[] = 'You need to enter a username and password';  /* if the username or password is empty, display the code */
    } else if(user_exists($username) === false) { /* we are checking if the user exists,  */
        $errors[] = "We can't find the username.  Have you registered?";
    } else if (user_active($username) === false) {
		$errors[] = "You haven\'t activated your account!";
	} else {
		$login = login($username, $password);
		if ($login === false) {
			$errors[] = 'That username/password combination is incorrect';
		} else {
			if ($login === true);
			$_SESSION['user_id'] = get_user_id_from_username($username);// set the user session
			header('Location: index.php');//redirect user to home
			exit();
		}
	}
}
if (empty($errors) === false) {
	echo output_errors($errors);
}
?>
		</div>
			<?php include 'includes/article/article.php'; ?>
				<?php include 'includes/footer/footer.php'; ?>
		</div>	
	</body>
</html>
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