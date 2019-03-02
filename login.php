<?php
    $db = mysqli_connect("localhost", "root", "", "authentication");
    session_start();
    <form action="register.php" method="post">
    $username = mysql_real_escape_string($_POST['userName']);
    $password = mysql_real_escape_string($_POST['psw']);
    
    $password = md5($password);
    $sql = "SELECT FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_session['message'] = "You are now logged in";
        $_session['username'] = $username;
        header["location; index.html"]
    } else {
        $_session['message'] = "Username/password combination incorrect";
    }
?>