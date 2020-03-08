<?php
include("connection.php");
if (isset($_POST['submit'])) {
  if( !empty($_POST['jtitle']) && !empty($_POST['type']) )
  {
    
     
    
    $title=$_POST['jtitle'];
     $type=$_POST['type'];
    $mobile=$_POST['mn'];
    $email=$_POST['em'];
   
     $role=$_POST['jrole'];
       $nopost=$_POST['nopost'];
       $salary=$_POST['salary'];
       $min=$_POST['min'];
       $max=$_POST['max'];
       $des=$_POST['des'];
       $skill=$_POST['skills'];
       $profile=$_POST['profile'];

    
    $officeadd=$_POST['add'];
    $city=$_POST['city'];
    $comname=$_POST['comname'];
     $time=$_POST['time'];
    $interdate=$_POST['interdate'];
    $status="active";
    $emid= $_SESSION['emuser'];
   
    $datee=date("Y-m-d");
    



    $image = $_FILES['file']['name'];
  //echo "$name";
    $target_dir = "imageupload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
  //echo "$target_file";

  // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif","svg","pdf");

  // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

     // Insert record

      $sql = "INSERT INTO `jobs`( `jb_title`, `jb_type`, `jb_role`, `salary`, `ex_min`, `ex_max`, `city`, `jobdes`, `comname`, `email`, `mobile`, `address`, `noofpost`, `image`, `skills`, `profile`, `postdate`,emid,intertime,interviewdate,status) 
      VALUES ('".$title."', '".$type."', '".$role."','".$salary."','".$min."','".$max."','".$city."','".$des."' , '".$comname."' , '".$email."', '".$mobile."' , '".$officeadd."', '".$nopost."', '".$image."', '".$skill."' , '".$profile."' , '".$datee."' , '".$emid."', '".$time."', '".$interdate."', '".$status."')";
      if (mysqli_query($con, $sql)) {

        header("location:employdeshboard.php");
      } else {
        echo"not run";
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }


     // Upload file
      move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$image);

    }

  
 
  }
  else{

    echo "All fields are required!";  
  }


}
mysqli_close($con);


?>



