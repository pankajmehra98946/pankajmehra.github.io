<?php
include("connection.php");
 
   $jb_id=$_GET['id'];
   $us_id=$_SESSION['user'];
   $datee=date("Y-m-d");
   $status="sent";
 



    $sel="SELECT * FROM jobs where jb_id = $jb_id " ;
    $val=mysqli_query($con,$sel);
  

    if($val)  
    {  

      $row=mysqli_fetch_assoc($val);                               
      $em_id=$row['emid'];


      $qq=mysqli_query($con,"INSERT INTO `appliedjobs`( `employer_id`, `job_id`, `user_id`, `dateofapplied`, `status`) VALUES('".$em_id."', '".$jb_id."', '".$us_id."','".$datee."','".$status."')");
      if ($qq) {

      header("location:alljob.php");
      
      }
      else{

echo"not run";
        echo "Error: " . $sql . "<br>" . mysqli_error($con);

      }


    }

    else {  
      $_SESSION['error']='error'; 
      header("location:login.php");
                //echo "Invalid username or password!";  
    } 


 
?>  


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <script src="assets/owl-carousel/owl.carousel.js"></script>

</head>
<body>

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
      <a class="nav-link " href="registation.php" style="  color: white"><i class='fas fa-user ' style='font-size:14px;color: white'></i>&nbsp;Register</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="#" style="color: white"><i class='fas fa-home ' style='font-size:14px;color: white'></i>&nbsp;My Deshboard</a>
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
        <a class="nav-link" href="#" style="color: black">Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black">My Deshboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contectus.php" style="color: black">Contect Us</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" ><button class="btn " style="background-color: #E34216;color:white">Submit a job</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black;"><button class="btn btn-info"> Creat Resume</button></a>
      </li>
    </ul>
  </div>
</nav>
<div class="container-fluid " style=" height: 120px; width: 100%; background-image: url('desk8.jpg');  background-repeat: no-repeat;  background-position: center; background-size: 100%;font: 15px Roboto, sans-serif; ">
  <div class="row"> 
   <div class="  m-5 mx-auto  text-center text-white">
    <h1 class="mb-1">applied</h1>

  </div>
</div>

</div>

<div class="container-fluid">


  <div class="row p-2">

    <div class="col-lg-5 col-md-5 col-sm-12 d-inline-block ">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12  d-inline-block " style=" border-radius:5px">
        </div>

        <div class="col-lg-10 col-md-10 col-sm-12   d-inline-block" style="  height: 427px;background-image: url('desk4.png');  background-repeat: no-repeat;   background-size: cover  ;font: 15px Roboto, sans-serif; ">

         <div class="   pt-6 mx-auto  text-center text-white">
          <h1 class="mb-1 pt" style="padding-top: 50px">Find The Best Job For Your Future</h1>
          <p>It is a long established fact that a reader will be distracted by the readable.</p>


        </div>

      </div>
    </div>


  </div>

  <!---edit profile-->

  <div class="col-lg-6 col-md-6 col-sm-12 card mb-0 p-0  d-inline-block"> 
    <div class=" container-fluid card-header text-center text-uppercase text-white  " style=" background-image: url('desk4.png');  background-size:  100%  " > 
      <h4 class="card-title">

        Login
      </h4>

    </div> 
    <div class="card-body"> 
     

    </div>

  </div>


</div>
</div>





<footer class="container-fluid bg-dark" style="height: 100px">
  <div class="text-center">

   <p style="color:white"b class="py-4">Made by Mehra Creative © 2020</p>
 </div>
</footer>

</body>
</html>