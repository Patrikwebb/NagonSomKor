<?php

function sanitize($data) {
	
	global $mysqli_pekare;
	
	return mysqli_real_escape_string($mysqli_pekare, $data);

}
function output_errors($errors) {
	$output = array ();
	foreach($errors as $error) {
		$output[] = '<h3>We tried to log you in, but...</h3>' . '<li>' . $error . '</li>';
	}
	return '<ul>' . implode('', $output) .  '</ul>';
}
?>