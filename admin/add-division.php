<?php
session_start();
include('config.php');

					
$a = $_POST['name'];
$b = $_POST['country_id'];
$c = $_POST['status'];

$sql = "INSERT INTO division (name,country_id,status) VALUES (:a,:b, :c)";
$q = $DB->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b, ':c'=>$c));
header("location: division-list.php");


?>