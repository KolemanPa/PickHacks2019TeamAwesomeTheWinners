<?php
    $db = mysqli_connect("localhost", "root", "PuFXrzGwUE5paP", "UserDatabase");
    session_start();
    $username = mysql_real_escape_string($_POST['userName']);
    $birth = mysql_real_escape_string($_POST['birthday']);
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['psw']);
    $password2 = mysql_real_escape_string($_POST['psw-repeat']);

	if(!link->connect_error){
		//$output = 'Unable to connect to the database server.'; 
		//include 'output.html.php'; 
		echo "error";
		exit();
	} else {
		if ($password == $password2) {
			echo "connected";
			// hash for protection.
			//$password = md5($password);
			$sql = "INSERT INTO `UserDatabase`(`UserName`, `Email`, `DOB`, `SignUpDate`, 'Password') VALUES ($username,$email,$birth,$password)";
			mysqli_query($db, $sql);
			echo "success";
			$_session['message'] = "You are now logged in";
			$_session['username'] = $username;
			header("location; index.html");
		} else {
			$_session['message'] = "the passwords don't match";
		}
	}
?>