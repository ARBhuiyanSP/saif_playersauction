<?php
session_start();
include('config.php');

					
$a = $_POST['name'];
$b = $_POST['division_id'];
$c = $_POST['status'];

$sql = "INSERT INTO district (name,division_id,status) VALUES (:a,:b, :c)";
$q = $DB->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b, ':c'=>$c));
header("location: district-list.php");


?>