<?php
session_start();
include('config.php');

					
$a = $_POST['name'];
$b = $_POST['status'];

$sql = "INSERT INTO country (name,status) VALUES (:a,:b)";
$q = $DB->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b));
header("location: country-list.php");


?>