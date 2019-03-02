<?php
$userName = $_POST['userName'];
$psw = $_POST['psw'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
if (!empty($userName) || !empty($psw) || !empty($birthday) || !empty($email)){
    $host = "localhost";
    $dbUsername = "userName";
    $dbPassword = "psw";
    $conn = mysqli_connect($userName,$psw,$email);
}
if(!$conn){
    die("connection Failed" .mysqli_connect_error());
}
echo "connected succesfully";
$conn->close();
mysqli_close($conn);


?>