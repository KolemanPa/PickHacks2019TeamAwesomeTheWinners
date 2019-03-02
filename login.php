<?php
    $db = mysqli_connect("localhost", "root", "", "authentication");
    session_start();
    <form action="register.php" method="post">
    $userName = mysql_real_escape_string($_POST['userName']);
    $psw = mysql_real_escape_string($_POST['psw']);
    
    $psw = md5($psw);
    $sql = "SELECT FROM users WHERE userName = '$userName' AND psw = '$psw'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_session['message'] = "You are now logged in";
        $_session['userName'] = $userName;
        header["location; index.html"]
    } else {
        $_session['message'] = "Username/password combination incorrect";
    }
?>