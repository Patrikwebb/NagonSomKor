<aside>
	<?php
	if (user_id_from_username($username) === true) {
		include 'includes/meny/loggedin.php';
	} else {
		include 'includes/meny/login.php';
	}
	?>
</aside>