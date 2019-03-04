<?php
session_start();
include('config.php');

					
$a = $_POST['name'];
$b = $_POST['president'];
$c = $_POST['manager'];
$d = $_POST['country'];
$e = $_POST['division'];
$f = $_POST['district'];
$g = $_POST['location'];
$h = $_POST['website'];
$i = $_POST['status'];

$sql = "INSERT INTO club (name,president,manager,country,division,district,location,website,status) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i)";
$q = $DB->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b, ':c'=>$c, ':d'=>$d, ':e'=>$e, ':f'=>$f, ':g'=>$g, ':h'=>$h, ':i'=>$i));
header("location: club-list.php");


?>