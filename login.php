<?php
include("connection.php");
if (isset($_POST['login'])) 
{

  if(!empty($_POST['em']) && !empty($_POST['pwd']) && !empty($_POST['type']) )
  { 

   $email= mysqli_real_escape_string($con, $_POST['em']);  
   $pass=mysqli_real_escape_string($con, $_POST['pwd']); 
   $type=mysqli_real_escape_string($con, $_POST['type']);  
   if ($type==1) {


    $sel="SELECT * FROM employregistation where em_emailid = '$email' and em_password = '$pass' and role = '$type' " ;
    $val=mysqli_query($con,$sel);
    $numrows=mysqli_num_rows($val);  

    if($numrows > 0)  
    {  

      $row=mysqli_fetch_assoc($val);                               
      $_SESSION['emuser']=$row['em_id']; 


                      // if(isset($_POST['check'])) {
                      //     $cookie_name = $row['emailid'];
                      //   $cookie_value = $row['password'];
                      //   setcookie("cookieemail",$cookie_name,time() + (86400 * 30), "/"); // 86400 = 1 day
                      //    setcookie("cookiepass", $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day 
                      //   }

                      //                 echo '<span class="spinner-border spinner-border-sm"></span>';
      header("location:employdeshboard.php");
    }

    else {  
      $_SESSION['error']='error'; 
      header("location:login.php");
                //echo "Invalid username or password!";  
    } 


  }
  else{

    $sel="SELECT * FROM userregistation where emailid = '$email' and password = '$pass' and role = '$type' " ;
    $val=mysqli_query($con,$sel);
    $numrows=mysqli_num_rows($val);  

    if($numrows > 0)  
    {  

      $row=mysqli_fetch_assoc($val);                               
      $_SESSION['user']=$row['user_id']; 


                      // if(isset($_POST['check'])) {
                      //     $cookie_name = $row['emailid'];
                      //   $cookie_value = $row['password'];
                      //   setcookie("cookieemail",$cookie_name,time() + (86400 * 30), "/"); // 86400 = 1 day
                      //    setcookie("cookiepass", $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day 
                      //   }

                      //                 echo '<span class="spinner-border spinner-border-sm"></span>';
      header("location:home1.php");
    }

    else {  
      $_SESSION['error']='error'; 
      header("location:login.php");
                //echo "Invalid username or password!";  
    } 





  } 



} 


else {  
  echo "All fields are required!";  
}  
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

  <nav class="navbar navbar-expand-sm  navbar-dark" style="background: linear-gradient(to right, rgba(22, 80, 226, 0.95) 0%, rgba(126, 81, 236, 0.95) 100%);font: 15px Roboto, sans-serif;"  >
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
<div class="container-fluid " style=" height: 120px; width: 100%; background-image: url('desk8.jpg');  background-repeat: no-repeat;  background-position: center; background-size: 100%;font: 15px Roboto, sans-serif;background: linear-gradient(to right, rgba(22, 80, 226, 0.95) 0%, rgba(126, 81, 236, 0.95) 100%); ">
  <div class="row"> 
   <div class="  m-5 mx-auto  text-center text-white">
    <h1 class="mb-1">Login Here</h1>

  </div>
</div>

</div>

<div class="container-fluid" style="background-color: #f0f3fa" >


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

  <div class="col-lg-6 col-md-6 col-sm-12 card mb-0 px-0 d-inline-block"> 
    <div class=" container-fluid card-header text-center text-uppercase text-white  " style=" background-image: url('desk4.png');  background-size:  100%  " > 
      <h4 class="card-title">

        Login
      </h4>

    </div> 
    <div class="card-body"> 
      <form action="" method="post">
        <div class="row">

          <div class="col-lg-7 col-md-7 col-sm-12  mx-auto"> 
            <div class="form-group"> 

              <label class="form-label">Email address</label> 

              <input type="email" class="form-control" name="em" placeholder=" Enter EmailId">
            </div>
          </div> 




          <div class="col-lg-7 col-md-7 col-sm-12 mx-auto">
            <div class="form-group"> 

              <label class="form-label">Password</label> 

              <input type="Password" class="form-control" name="pwd" placeholder="Enter Password"> 
            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12 mx-auto"> 
            <div class="form-group"> 
              <label class="form-label"> Login Type</label>
              <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search select2-hidden-accessible" data-placeholder="Select" data-select2-id="3" tabindex="-1" aria-hidden="true" name="type"> 
                
                  <option data-select2-id="5">--Select type--</option> 
                  <option value="1">Employer</option> 
                  <option value="2">User</option> 

              
              </select>
            </div>




          </div> 
        </div> 
        <div class="card-footer text-center "> 
          <button type="submit"  name="login"  class="btn btn-primary col-lg-4 ">Login</button> 
        </div> 
      </form>

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