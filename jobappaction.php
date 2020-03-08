<?php
include("connection.php");


   if( $id= $_POST['id']){
  $sta="Accpeted";

  $sel=mysqli_query($con,"UPDATE `appliedjobs` SET `id` = $id, `status` = '$sta' WHERE id = $id");
 if ($sel) {
 	header("location:employdeshboard.php");
 }
 else
 {

 	echo"ni chal ra";
 }
   }
   else{

$id= $_POST['idd'];
 $sta="Rejected";

  $sel=mysqli_query($con,"UPDATE `appliedjobs` SET `id` = $id, `status` = '$sta' WHERE id = $id");
 if ($sel) {
 	header("location:employdeshboard.php");
 }
 else
 {

 	echo"ni chal ra";
 }


   }


 

?>



