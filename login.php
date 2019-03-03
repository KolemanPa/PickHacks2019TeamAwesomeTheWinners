<?php
	//Server Info
	$servername = "127.0.0.1";
	$dbname = "Planagame.com";
	$serverUser = "root";
	$serverPassword = "PuFXrzGwUE5paP";
	$db = mysqli_connect($servername, $serverUser, $serverPassword, $dbname);
	session_start();
	
	//form info
	$username = mysqli_real_escape_string($db,$_POST["userName"]);
	$password = mysqli_real_escape_string($db,$_POST["psw"]);
	
	
	
	// check connection
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}
	
	$sql = "SELECT UserID, UserName, Password FROM UserDatabase";
	$result = mysqli_query($db, $sql);
	
	if (mysqli_num_rows($result) > 0) {
    	// output data of each row
		echo "success";
		$_session['message'] = "You are now logged in";
		$_session['username'] = $username;
		/*while($row = mysqli_fetch_assoc($result)) {
			echo "UserName: " . $row["UserName"]. "<br>";
		}*/
	} else {
		echo "no username/passowrd combination matching input found.";
	}
	
	mysqli_close($db);
?>