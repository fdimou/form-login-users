<?php
$server='localhost';
$user='root';
$pass='';
$conn=new mysqli($server,$user,$pass);
if ($conn->connect_error) die ('Error'.$conn->connect_error);
echo'Connected';
$conn->close();
?>
