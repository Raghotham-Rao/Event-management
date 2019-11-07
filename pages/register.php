<?php

    session_start();

    include 'db.php';
    $conn = OpenCon();
    
    $query = 'insert into registrations values("'.$_GET["eve_name"].'", "'.$_SESSION["curr_user"].'")';
    $conn->query($query);
    $conn->close();

    header("Location: welcome_get1.php");
?>