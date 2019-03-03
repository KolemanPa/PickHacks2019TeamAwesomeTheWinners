<?php
ini_set('display_errors',1);
    $db = mysqli_connect("127.0.1","root","PuFXrzGwUE5paP", "Planagame.com");
    $username = mysqli_real_escape_string($db,$_POST["userName"]);
    $txt = mysqli_rea_escape_string($db,$_POST["message"]);
    date_default_timezone_set()
    $sql = "INSERT INTO posts (userName, message, timedate, zip) VALUES ($username, $txt, NOW(), zip)";
    $result = mysqli_query($db, $sql);

    while($data = mysqli_fetch_assoc($result)) {
        foreach($data as $key => $value) {
          echo "<$key>$value</$key>";
        }
      }
?>