<?php
session_start();
include('config.php');

					
$id = $_GET['id'];



$sql = "DELETE FROM district WHERE id = :id";
$q = $DB->prepare($sql);
$q->execute(array(':id'=>$id));
header("location: district-list.php");


?>