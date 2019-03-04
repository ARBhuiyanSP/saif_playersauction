<?php
session_start();
include('config.php');

$id =  $_POST['id'];				
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


  
  
  if (is_uploaded_file($_FILES['prt_image']['tmp_name'])) 
				{
					$temp_file=$_FILES['prt_image']['tmp_name'];
					$img=time().$_FILES['prt_image']['name'];
					$q = move_uploaded_file($temp_file,"../img/players/".$img);
				}
				else
				{
				 $img = $_POST["old_image"];
				}

$status = $_POST['status'];


$sql = "UPDATE players SET club=?,name=?,dob=?,citizenship=?,father=?,passport=?,religion=?,blood=?,married=?,resiaddress=?,hometel=?,mobile=?,jerseyname=?,position=?,jerseyno=?,height=?,weight=?,photo=?,status=? WHERE id=$id";
		
$result = $DB->prepare($sql);
$result->execute(array($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$img,$status));


echo "<script>
            alert('Update Has Been Successfully Done.Stay with Us For Future Update');
			window.location.href='edit-player.php?id=$id';
             </script>"



?>