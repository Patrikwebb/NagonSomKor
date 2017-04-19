<?php include 'core/init.php'; ?>
<!DOCTYPE HTML>
<html lang="sv">	
	<?php include 'includes/head/head.php'; ?>
	<body>
		<div id="wrapper">
			<?php include 'includes/section/section.php'; ?>
		<div id="content">
			<h3>Välkommen till Någon som kör (Göteborg)</h3>
				<p>
				Tack för att du registrerat dig <?php echo $_POST["user"]; ?>! <br /> <br />
				Du har reggat dig med mail adressen: <?php echo $_POST["email"]; ?>.
				</p>
			<h3>Support</h3>
				<p>
				Har du några funderingar kan du alltid maila till oss.
				</p>				
		</div>	
			<?php include 'includes/article/article.php'; ?>
				<?php include 'includes/footer/footer.php'; ?>
		</div>	
	</body>
</html>
