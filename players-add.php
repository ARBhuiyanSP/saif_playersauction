<?php
session_start();
include('config.php');

					
$a = $_POST['club'];
$b = $_POST['name'];
$c = $_POST['dob'];
$d = $_POST['citizenship'];
$e = $_POST['father'];
$f = $_POST['passport'];
$g = $_POST['religion'];
$h = $_POST['blood'];
$i = $_POST['married'];
$j = $_POST['resiaddress'];
$k = $_POST['hometel'];
$l = $_POST['mobile'];
$m = $_POST['jerseyname'];
$n = $_POST['position'];
$o = $_POST['jerseyno'];
$p = $_POST['height'];
$q = $_POST['weight'];

if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) 
  {
	$img=time()."_".$_FILES['fileToUpload']['name'];
	$temp_file=$_FILES['fileToUpload']['tmp_name'];
	
	 move_uploaded_file($temp_file,"img/players/".$img);
  }

$status = $_POST['status'];




$sql = "INSERT INTO players (club,name,dob,citizenship,father,passport,religion,blood,married,resiaddress,hometel,mobile,jerseyname,position,jerseyno,height,weight,photo,status) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l,:m,:n,:o,:p,:q,:img,:r)";
$result = $DB->prepare($sql);
$result->execute(array(':a'=>$a,':b'=>$b, ':c'=>$c, ':d'=>$d, ':e'=>$e, ':f'=>$f, ':g'=>$g, ':h'=>$h, ':i'=>$i, ':j'=>$j, ':k'=>$k, ':l'=>$l, ':m'=>$m, ':n'=>$n, ':o'=>$o, ':p'=>$p, ':q'=>$q, ':img'=>$img, ':r'=>$status));


echo "<script>
            alert('Registration Has Been Successfully Done.Stay with Us For Future Update');
			window.location.href='index.php';
             </script>"



?>