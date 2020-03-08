<?php
include("connection.php");
if (isset($_POST['submit'])) {
	if( !empty($_POST['em']) && !empty($_POST['pwd']) && !empty($_POST['cn']) && !empty($_POST['mn']) && !empty($_POST['oa']) && 
		!empty($_POST['city']) && !empty($_POST['zc']) && !empty($_POST['personname']) && !empty($_POST['designation'])  )
	{
		$name=$_POST['personname'];
		$mobile=$_POST['mn'];
		$email=$_POST['em'];
		$passw=$_POST['pwd'];

		$comname=$_POST['cn'];
		$officeadd=$_POST['oa'];
		$city=$_POST['city'];
		$zip=$_POST['zc'];
		$designation=$_POST['designation'];
		$datee=date("Y-m-d");
		$role=1;



		$image = $_FILES['file']['name'];
  //echo "$name";
		$target_dir = "imageupload/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
  //echo "$target_file";

  // Select file type
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
		$extensions_arr = array("jpg","jpeg","png","gif","svg");

  // Check extension
		if( in_array($imageFileType,$extensions_arr) ){

     // Insert record

			$sql = "INSERT INTO `employregistation`( `em_emailid`, `em_password`, `em_companyname`, `em_mobileno`, `em_address`, `em_city`, `em_pastalcode`, `em_conpername`, `em_designation`, `em_image`,`em_regdate`,role)
			VALUES ('".$email."', '".$passw."', '".$comname."','".$mobile."','".$officeadd."','".$city."','".$zip."','".$name."','".$designation."' , '".$image."' , '".$datee."', '".$role."')";
			if (mysqli_query($con, $sql)) {

				header("location:login.php");
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







