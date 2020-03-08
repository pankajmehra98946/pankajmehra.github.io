<?php
include("connection.php");
if (!isset($_SESSION['user'])) {
  header('location:login.php');
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <script src="assets/owl-carousel/owl.carousel.js"></script>
  <style type="text/css">
    
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
 
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


  </style>

</head>
<body>

  <nav class="navbar navbar-expand-sm  navbar-dark" style="background-color: #3333ff;font: 15px Roboto, sans-serif;"  >
    <!-- Brand/logo -->


    <!-- Links -->
    <ul class="navbar-nav"  >
      <li class="nav-item" style="border-left: 1px solid rgba(255,255,255,0.15);
      line-height: 1.7;">
      <a class="nav-link" href="https://www.facebook.com/"><i class='fab fa-facebook' style='font-size:20px; color: white;'></i>&nbsp;</a>
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
      <a class="nav-link " href="logout.php" style="  color: white"><i class='fas fa-user ' style='font-size:14px;color: white'></i>&nbsp;logout</a>
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
        <a class="nav-link" href="aboutus.php" style="color: black">About us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black">Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="deshboard.php" style="color: black">My Deshboard</a>
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

<div class="container-fluid " style=" height: 150px; width: 100%; background-image: url('desk8.jpg');  background-repeat: no-repeat;  background-position: center; background-size: 100%;font: 15px Roboto, sans-serif; ">
  <div class="row"> 
   <div class="  m-5 mx-auto  text-center text-white">
    <h1 class="mb-1">Jobs</h1>

  </div>
</div>

</div>

<!-- 
<div class="container-fluid  py-2 " style="background-color:#3333ff">

  
<div class="row p-2" >
  
  <div class="col-lg-3 col-md-3 col-sm-3  d-inline-block" >
    <div class="col-lg-12 col-md-12 col-sm-12  d-inline-block bg-white " style="height: 100px; border-radius:5px ">
       
       <img src="nurse.png" class="card-img " height="80"> 
  </div>
  </div>
    
 <div class="col-lg-3 col-md-3 col-sm-3  d-inline-block" >
   <div class="col-lg-12 col-md-12 col-sm-12  d-inline-block bg-white" style="height: 100px; border-radius:5px">
    
  </div>
 </div>
  <div class="col-lg-3 col-md-3 col-sm-3  d-inline-block" >
    <div class="col-lg-12 col-md-12 col-sm-12  d-inline-block bg-white" style="height: 100px; border-radius:5px">
    
  </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3  d-inline-block">
    <div class="col-lg-12 col-md-12 col-sm-12  d-inline-block bg-white" style="height: 100px; border-radius:5px">
    
  </div>
  </div>

</div>
</div> -->


<!--  alljobs   div  -->
<div class="container-fluid" style="background-color: white">
 
 
<div class="container">
 <div class="row m-0 " >
  <!--  recent job 1 block  -->
  <?php

  $sel="SELECT * FROM jobs ORDER BY postdate ASC  ";
  $val=mysqli_query($con,$sel);
  while ($fetch= mysqli_fetch_assoc($val)) 
  {

    ?>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 py-3 " >
      <div class="card  d-inline-block bg-white" style="border-radius:5px">
        <div class="card-header" >
          <div class="row " >
            <div class="col-3 img-fluid "><img src="imageupload/<?php echo $fetch['image']; ?>"  style="height: 70px; width: 70px; "> </div>
            <div class="col-5  pt-1 text-uppercase"><h6  ><?php echo $fetch['comname']; ?></h6> </div>
            <div class="col-4 ml-auto mt-4">
             <a class="btn btn-light mt-6 mr-4 font-weight-semibold text-dark" href="company-details.html"><i class="fa fa-briefcase"></i>    
              <?php echo $fetch['noofpost']; ?> &nbsp;vacancies</a> 

            </div>

          </div>
        </div>
        <div class="card-body">
          <div class="row" >
            <div class="col-12">
              <table class="table row table-borderless w-100 m-0 text-nowrap "> 
                <tbody class="col-lg-12 col-xl-12 p-0">
                  <tr><td class="px-0 py-1"><span class="font-weight-semibold">Positions</span>
                  </td>
                  <td class="p-1"><span>:</span></td>
                  <td class="p-1"><span>Web designer, Web developers</span></td>
                </tr>
                <tr>
                  <td class="px-0 py-1"><span class="font-weight-semibold">Address</span></td>
                  <td class="p-1"><span>:</span></td>
                  <td class="p-1"><span><?php echo substr($fetch['address'],"0","20") ; ?>...</span></td>
                </tr> 
                <tr>
                  <td class="px-0 py-1"><span class="font-weight-semibold">Salary</span></td>
                  <td class="p-1"><span>:</span></td>
                  <td class="p-1"><span> ₹<?php echo $fetch['salary'] ; ?> P.A.</span></td>
                </tr>
                <tr>
                  <td class="px-0 py-1"><span class="font-weight-semibold">Post Date</span></td>
                  <td class="p-1"><span>:</span></td>
                  <td class="p-1"><span> <?php echo $fetch['postdate'] ; ?> </span></td>
                </tr>
              </tbody>
            </table>

          </div>

          <div class="mt-3"> <a class="btn btn-info" href="apply.php?id=<?php echo $fetch['jb_id']?>" onclick=" return mysub();" value="1" >Apply Now</a> 
           <a  class="btn btn-success" href="jobdetail.php?id=<?php echo $fetch['jb_id']?>"  >View Details</a></div>



         </div>
       </div>
  
     </div>
   </div>
   <?php
 }
 ?>


</div>

</div>

</div>


<footer class="container-fluid bg-dark" style="height: 100px">
  <div class="text-center">

   <p style="color:white"b class="py-4">Made by Mehra Creative © 2020</p>
 </div>
</footer>


<script type="text/javascript">
  function mysub() {
    var x = confirm("Are you sure you want to apply?");
    if (x)
      return true;
    else
      return false;
  }
</script>


</body>
</html>