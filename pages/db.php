<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "strictlymine";
 $db = "event";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db)or die("Connect failed: %s\n". $conn -> error) ;
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>