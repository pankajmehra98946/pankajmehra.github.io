<?php
include("connection.php");
if (isset($_POST['submit'])) {
  if( !empty($_POST['fn']) && !empty($_POST['ln']) && !empty($_POST['em']) && !empty($_POST['mn']) && !empty($_POST['add']) && 
    !empty($_POST['city']) && !empty($_POST['zip']) && !empty($_POST['pwd']) && !empty($_POST['rpwd'])  )
  {
    if (($_POST['pwd'] )== ($_POST['rpwd']) ){
     
    
    $fname=$_POST['fn'];
     $lname=$_POST['ln'];
    $mobile=$_POST['mn'];
    $email=$_POST['em'];
    $passw=$_POST['pwd'];
     $rpassw=$_POST['rpwd'];

    
    $officeadd=$_POST['add'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
   
    $datee=date("Y-m-d");
    $role=2;



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

      $sql = "INSERT INTO `userregistation`( `firstname`, `lastname`, `emailid`, `mobileno`, `usaddress`,usercity , `zip`, `password`, `resume`, `date`, `role`)
      VALUES ('".$fname."', '".$lname."', '".$email."','".$mobile."','".$officeadd."','".$city."','".$zip."','".$passw."' , '".$image."' , '".$datee."', '".$role."')";
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
  else
  {

    echo"pass and rpass not matched";
  }

  }
  else{

    echo "All fields are required!";  
  }


}
mysqli_close($con);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/reg.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <script src="assets/owl-carousel/owl.carousel.js"></script>
  <style>
    body {font-family: Arial;}

    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;

    }
  </style>

</head>
<body style="background-color:#f0f3fa">

  <nav class="navbar navbar-expand-sm  navbar-dark" style="background-color: #3333ff;font: 15px Roboto, sans-serif;"  >
    <!-- Brand/logo -->


    <!-- Links -->
    <ul class="navbar-nav"  >
      <li class="nav-item" style="border-left: 1px solid rgba(255,255,255,0.15);
      line-height: 1.7;">
      <a class="nav-link" href="#"><i class='fab fa-facebook' style='font-size:20px; color: white;'></i>&nbsp;</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class='fab fa-google-plus' style='font-size:20px;color: white'></i>&nbsp;</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class='fab fa-instagram' style='font-size:20px;color: white'></i>&nbsp;</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class='fab fa-linkedin' style='font-size:20px;color: white'></i>&nbsp;</a>
    </li>
  </ul>

  <ul class="navbar-nav ml-auto">

    <li class="nav-item">
      <a class="nav-link" href="login.php" style="color: white"><i class="fas fa-users-cog" style='font-size:14px;color: white'></i>&nbsp;Login</a>
    </li>

  </ul>
</nav>

<!--  nav bar sticky -->
<nav class="navbar navbar-expand-md bg-white sticky-top  " style=" font: 15px Roboto, sans-serif;  ">
  <!-- Brand -->
  <a class="navbar-brand" href="index11.php">
    <img src="jobs.png" alt="logo" style="width:40px;">
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="fa fa-bars" ></span>

  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav " >
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black;">Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black">pages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black">Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black">My Deshboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black">Contect Us</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" ><button class="btn " style="background-color: #E34216;color:white">Submit a job</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black;"><button class="btn btn-info"> Create Resume</button></a>
      </li>
    </ul>
  </div>
</nav>


<div class="container-fluid " style=" height: 120px; width: 100%; background-image: url('desk8.jpg');  background-repeat: no-repeat;  background-position: center; background-size: 100%;font: 15px Roboto, sans-serif; ">
  <div class="row"> 
    <div class="  m-5 mx-auto  text-center text-white text-uppercase">
      <h1 class="mb-1">Create Account</h1>

    </div>
  </div>

</div>

<div class="container-fluid" style="background-color: #f0f3fa">


  <div class="row p-2">

    <div class="col-lg-5 col-md-5 col-sm-12 d-inline-block ">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12  d-inline-block " style=" border-radius:5px">
        </div>

        <div class="col-lg-10 col-md-10 col-sm-12   d-inline-block" style=" height: 700px; background-image: url('desk4.png');  background-repeat: no-repeat;   background-size:  100%  700px;font: 15px Roboto, sans-serif; ">

          <div class="  m-5 pt-6 mx-auto  text-center text-white">
            <h1 class="mb-1 pt" style="padding-top: 120px">Find The Best Job For Your Future</h1>
            <p>It is a long established fact that a reader will be distracted by the readable.</p>


          </div>

        </div>
      </div>


    </div>

    <!---edit profile-->

    <div class="col-lg-6 col-md-6 col-sm-12 card mb-0  p-0 d-inline-block"> 
      <div class="  card-header text-center text-dark text-uppercase   " style=" background-image: url('desk4.png'); " > 

        <div class="tab">
          <button   class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen"><h4> User Registation</h4>
          </button>


          <button  class="tablinks" onclick="openCity(event, 'Paris')" ><h4> Employer Registation</h4></button>
        </div>
      </div> 
      <div  class="card-body"> 
        <div id="London" class="tabcontent">
           <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="form-group"> 

                <label class="form-label"> First Name</label> 

                <input type="text" class="form-control" name="fn" placeholder=" Enter First Name"> 
              </div>
            </div> 
            <div class="col-sm-6 col-md-6">
              <div class="form-group"> 
                <label class="form-label">Last Name</label>

                <input type="text" class="form-control" name="ln" placeholder=" Enter Last Name"> 
              </div>
            </div>
            <div class="col-sm-6 col-md-6"> 
              <div class="form-group"> 

                <label class="form-label">Email address</label> 

                <input type="email" class="form-control" name="em" placeholder=" Enter EmailId">
              </div>
            </div> 

            <div class="col-sm-6 col-md-6">
              <div class="form-group"> 
                <label class="form-label">Mobile Number</label> 

                <input type="number" class="form-control" name="mn" placeholder="Enter Mobile Number"> 
              </div> 
            </div> 
            <div class="col-md-12"> 
              <div class="form-group"> 
                <label class="form-label">Address</label>

                <input type="text" class="form-control" name="add" placeholder=" Enter Address"> 
              </div> 
            </div> 
            <div class="col-sm-6 col-md-4"> 
              <div class="form-group"> 
                <label class="form-label">City</label> 

                <input type="text" class="form-control" name="city" placeholder=" Enter City">
              </div> 
            </div> 
            <div class="col-sm-6 col-md-3">
              <div class="form-group"> 
                <label class="form-label">Postal Code</label>

                <input type="number" class="form-control" name="zip" placeholder=" Enter ZIP Code"> 
              </div> 
            </div>
          
          <div class="col-sm-6 col-md-6">
            <div class="form-group"> 

              <label class="form-label" >Password</label> 

              <input type="Password" class="form-control" name="pwd" placeholder="Enter Password"> 
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="form-group"> 

              <label class="form-label">Repassword</label> 

              <input type="password" class="form-control" name="rpwd" placeholder=" Enter Password Again"> 
            </div>
          </div>



          <div class="col-md-12"> 
            <div class="form-group mb-0"> 
              <label class="form-label">Upload Resume</label> 
              <div class="custom-file"> 
                <input type="file" class="custom-file-input" name="file"> 
                <label class="custom-file-label">Choose file</label> 
              </div> 
            </div>
          </div> 
          <div class="col-sm-6 col-md-6 pt-3"> 
            <div class="form-group "> 
              
              <input type="submit" class="form-control bt btn-info"  name="submit" class="btn btn-primary">
            </div> 
          </div> 
        </div> 
      </form>
      </div>


      <!--employregistation-->
      <div id="Paris" class="tabcontent">       
        <form action="employreg.php" method="post" enctype="multipart/form-data">
          <div class="row">


            <div class="col-sm-6 col-md-6">
              <div class="form-group"> 

                <label class="form-label">Email Id</label> 
                <input type="email" class="form-control" name="em" placeholder="Enter emailid" required=""> 
              </div>
            </div> 
            <div class="col-sm-6 col-md-6">
              <div class="form-group"> 

                <label class="form-label">Password</label>
                <input type="Password" class="form-control" name="pwd" placeholder=" Enter Password" required=""> 
              </div>
            </div>
            <div class="col-sm-6 col-md-6"> 
              <div class="form-group"> 

                <label class="form-label">Company Name</label> 
                <input type="text" class="form-control" name="cn" placeholder="Enter company name" required="">
              </div>
            </div> 

            <div class="col-sm-6 col-md-6">
              <div class="form-group"> 

                <label class="form-label">Phone Number</label> 
                <input type="number" class="form-control" name="mn" placeholder=" Enter mobile number" required=""> 
              </div> 
            </div> 
            <div class="col-md-12"> 
              <div class="form-group"> 
                <label class="form-label">Office Address</label>
                <input type="text" class="form-control" name="oa" placeholder="Enter Office Address" required=""> 
              </div> 
            </div> 
            <div class="col-sm-6 col-md-4"> 
              <div class="form-group"> 

                <label class="form-label">City</label> 
                <input type="text" class="form-control" name="city" placeholder="City" required="">
              </div> 
            </div> 
            <div class="col-sm-6 col-md-3">
              <div class="form-group"> 

                <label class="form-label">Postal Code</label>
                <input type="number" class="form-control" name="zc"  placeholder="ZIP Code" required=""> 
              </div> 
            </div>
         
          <div class="col-sm-6 col-md-6"> 
            <div class="form-group"> 

              <label class="form-label">Contect Person's Name</label> 
              <input type="text" class="form-control" placeholder="Contect Person's Name" name="personname" required=""> 
            </div> 
          </div> 
          <div class="col-sm-6 col-md-6"> 
            <div class="form-group"> 
              <label class="form-label">Designation</label>
              <input type="text" class="form-control" placeholder="Designation" name="designation" required=""> 
            </div> 
          </div> 



          <div class="col-md-12"> 
            <div class="form-group mb-0"> 
              <label class="form-label">Upload Image</label> 
              <div class="custom-file"> 
                <input type="file" class="custom-file-input" name="file" required=""> 
                <label class="custom-file-label">Choose file</label> 
              </div> 
            </div>
          </div> 
          <div class="col-sm-6 col-md-6 pt-3"> 
            <div class="form-group "> 
              
              <input type="submit" class="form-control bt btn-info"  name="submit" class="btn btn-primary">
            </div> 
          </div> 
        </div> 
      
      </form>



    </div> 


  </div> 





  

</div>

</div>








</div>








<footer class="container-fluid bg-dark" style="height: 100px">
  <div class="text-center">

    <p style="color:white"b class="py-4">Made by Mehra Creative © 2020</p>
  </div>
</footer>
<!-- <script type="text/javascript">
  $(document).ready(function(){
$(".bbnt").click(function(){
  $(".card-body").load("employreg.php").show();
   $(".bbnt").addClass("active");
    $(".userre").removeClass("active");
    $(".card-footer").hide();

});
$(".userre").click(function(){
  $(".card-body").load("registation.php" +" .card-body").show();
    $(".userre").addClass("active");
    $(".bbnt").removeClass("active");
    
    $(".card-footer").show();


});
$(".submit").click(function(){
 


// Returns successful data submission message when the entered information is stored in database.
var dataString = 'nm='+ submit ;
  
// AJAX Code To Submit Form.
    $.ajax({
      type: "POST",
      url: "employreg.php",
      data: dataString,
      cache: false,
    
    });
    



 
});





 
});

  



</script> -->

<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>




