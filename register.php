<?php
    $db = mysqli_connect("localhost", "root", "", "authentication");
    session_start();
    <form action="register.php" method="post">
    $username = mysql_real_escape_string($_POST['userName']);
    $birth = mysql_real_escape_string($_POST['birthday']);
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['psw']);
    $password2 = mysql_real_escape_string($_POST['psw-repeat']);

    if ($password == $password2) {
        // hash for protection.
        $password = md5($password);
        $sql = "INSERT INTO users(username, birthday, email, password) Values('$username, $birth, $email, $password')";
        mysqli_query($db, $sql);
        $_session['message'] = "You are now logged in";
        $_session['username'] = $username;
        header("location; index.html");
    } else {
        $_session['message'] = "the passwords don't match";
    }
?>