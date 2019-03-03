<?php
$userName = $_POST['userName'];
$psw = $_POST['psw'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
if (!empty($userName) || !empty($psw) || !empty($birthday) || !empty($email)){
    $host = "localhost";
    $dbUsername = "userName";
    $dbPassword = "psw";
    $conn= mysqli_connect("127.0.0.1", "root", "my_password", "users");
    $conn->query("my")
}
if(!$conn){
    die("connection Failed" .mysqli_connect_error());
}
echo "connected succesfully";
$conn->close();
mysqli_close($conn);


?>