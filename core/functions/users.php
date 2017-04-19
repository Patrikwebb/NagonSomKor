<?php
function user_data($user_id) {
		global $mysqli_pekare;
		$data = array();
		$user_id = (int)$user_id;
		
		$func_num_args = func_num_args();
		$func_get_args = func_get_args();
		
		if ($func_num_args > 1) {
			unset($func_get_args[0]);
			
			$fields = '`' . implode('`, `', $func_get_args) . '`';
			$sql = "SELECT '$fields' FROM `users` WHERE 'user_id' = '$user_id'";
			$result = mysqli_query($mysqli_pekare,$sql);
			$row = mysqli_fetch_assoc($result);
			
			return $row;
		}
}
function logged_in() {

		if (isset($_SESSION['user_id'])){ 
			return true;
		} else 
			return false;
			
}
function user_exists ($username) {
        global $mysqli_pekare;
        $username = sanitize($username);
        $query = mysqli_query($mysqli_pekare, ("SELECT * FROM `users` WHERE `username` = '$username'"));
        $rowcount= mysqli_num_rows($query);
     
        if ($rowcount < 1) return false;
     
        return true;
}
function user_active ($username) {
        global $mysqli_pekare;
        $username = sanitize($username);
		$query = mysqli_query($mysqli_pekare, ("SELECT * FROM `users` WHERE `username` = '$username' AND `active` = 1"));
        $rowcount= mysqli_num_rows($query);
     
        if ($rowcount < 1) return false;
     
        return true;		   
}
function user_id_from_username($username) {
		global $mysqli_pekare;
		$username = sanitize($username);
		$query = mysqli_query($mysqli_pekare, ("SELECT `user_id` FROM `users` WHERE `username` = '$username'"));
        $rowcount= mysqli_num_rows($query);
     
        if ($rowcount < 1) return false;
     
        return true;	
}
function get_user_id_from_username($username){
	
		global $mysqli_pekare;
		$username = sanitize($username);	
		$userid = mysqli_query($mysqli_pekare, ("SELECT `user_id` FROM `users` WHERE `username` = '$username'"));
        $rowcount= mysqli_num_rows($userid);

		if ($rowcount < 1) return false;
	
		return $userid;
}

function login ($username, $password) {
		global $mysqli_pekare;
		$user_id = user_id_from_username($username);
		
		$username = sanitize($username);
		$password = md5 ($password);
		$query = mysqli_query($mysqli_pekare, ("SELECT `user_id` FROM `users` WHERE `username` = '$username' AND `password` = '$password'"));
		$rowcount= mysqli_num_rows($query);
        if ($rowcount < 1) return false;
			
        return true;
}
?>