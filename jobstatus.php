<?php

include("connection.php");

if( $id= $_POST['ida']){
  $staa="active";

  $sel=mysqli_query($con,"UPDATE `jobs` SET `jb_id` = $id, `status` = '$staa' WHERE jb_id = $id");
 if ($sel) {
 	header("location:employdeshboard.php");
 }
 else
 {

 	echo"ni chal ra";
 }
   }
   else{

    $id= $_POST['idk'];
  $staa="deactive";

  $sel=mysqli_query($con,"UPDATE `jobs` SET `jb_id` = $id, `status` = '$staa' WHERE jb_id = $id");
 if ($sel) {
 	header("location:employdeshboard.php");
 }
 else
 {

 	echo"ni chal ra";
 }



   }




?>