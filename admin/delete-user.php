<?php
session_start();
include('config.php');

					
$id = $_GET['id'];



$sql = "DELETE FROM customer WHERE u_userid = :id";
$q = $DB->prepare($sql);
$q->execute(array(':id'=>$id));

$sql2 = "DELETE FROM system_users WHERE u_userid = :id";
$q2 = $DB->prepare($sql2);
$q2->execute(array(':id'=>$id));

header("location: users-list.php");


?>