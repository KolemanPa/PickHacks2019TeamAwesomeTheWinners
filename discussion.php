<?php
    $db = mysqli_connect("127.0.0.1", "root", "PuFXrzGwUE5paP", "Planagame.com");
	$sport = $_GET['sport'];
    $sql = "SELECT * FROM ".$sport;
    $result = mysqli_query($db, $sql);
    return $result;
?>