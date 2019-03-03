<?php
ini_set('display_errors',1);
try {
    $db = mysqli_connect("127.0.0.1", "root", "PuFXrzGwUE5paP", "Planagame.com");
    session_start();
	//echo mysqli_real_escape_string("userName");
    $username = mysqli_real_escape_string($db,$_POST["userName"]);
    $birth = mysqli_real_escape_string($db,$_POST["birthday"]);
    $email = mysqli_real_escape_string($db,$_POST["email"]);
    $password = mysqli_real_escape_string($db,$_POST["psw"]);
    $password2 = mysqli_real_escape_string($db,$_POST["psw-repeat"]);
	//var_dump $password;
	

		if ($password == $password2) {
			echo "connected";
			// TODO: hash for protection.
			//$password = md5($password);
			$sql = "INSERT INTO `UserDatabase`(`UserName`, `Email`, `DOB`, `SignUpDate`, `Password`) VALUES ('$username','$email','$birth',NOW(),'$password')";
			$result = mysqli_query($db, $sql);
			if(false===$result){
				printf("error: %s\n", mysqli_error($db));
			} else {
				echo "success";
				$_session['message'] = "You are now logged in";
				$_session['username'] = $username;
				//header("location: index.html");
			}
		} else {
			echo "Passwords Don't Match";
			$_session['message'] = "the passwords don't match";
		}
	
} catch(Exception $e){
	echo 'Message: ' .$e->getMessage();
}
?>