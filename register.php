<?php
    $db = mysqli_connect("localhost", "root", "PuFXrzGwUE5paP", "authentication");
    session_start();
    $username = mysql_real_escape_string($_POST['userName']);
    $birth = mysql_real_escape_string($_POST['birthday']);
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['psw']);
    $password2 = mysql_real_escape_string($_POST['psw-repeat']);

    if ($password == $password2) {
        // hash for protection.
        $password = md5($password);
        $sql = "INSERT INTO UserDatabase(UserName, Email, DOB, SignUpDate,Password) Values('$username, $email,  $birth,  $password')";
        mysqli_query($db, $sql);
        $_session['message'] = "You are now logged in";
        $_session['username'] = $username;
        header("location; index.html");
    } else {
        $_session['message'] = "the passwords don't match";
    }
?>