<?php

	$mysqli_pekare=mysqli_connect("localhost","root","pass!", "db");
	if (mysqli_connect_errno())
	{
        echo "Något gick fel: " . mysql_connect_error();
	}
?>