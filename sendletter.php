<?php
include("connection.php");

$id= $_GET['id'];
$sel="SELECT appliedjobs.user_id,appliedjobs.status , jobs.comname, userregistation.emailid,  userregistation.mobileno 
FROM ((appliedjobs
INNER JOIN jobs ON appliedjobs.job_id = jobs.jb_id)
INNER JOIN userregistation ON appliedjobs.user_id = userregistation.user_id) where  appliedjobs.status='Accpeted' and appliedjobs.id=$id ";
$val= mysqli_query($con, $sel);
$row=mysqli_fetch_assoc($val);

if (isset($_POST['Submit'])) {
$id= $_GET['id'];
   $text= $_POST['textarea'];
   $ddate=date("Y-m-d");
   
   $sql="UPDATE `appliedjobs` SET `id`=$id,`message`='$text' ,messenddate='$ddate' WHERE id=$id";

$vl=mysqli_query($con,$sql);
if ($vl) {
  header("location:employdeshboard.php");
}
else{
echo $sql;

}
  
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

  <nav class="navbar navbar-expand-sm  navbar-dark" style="background:linear-gradient(135deg, rgb(22, 80, 226) 0%, rgb(126, 81, 236) 100%);font: 15px Roboto, sans-serif;"  >
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

<div class="container-fluid  " style=" height: 150px; width: 100%;background-image: url('desk8.jpg');  background-repeat: no-repeat;  background-position: center; background-size: 100%;font: 15px Roboto, sans-serif;  
}  ">
  <div class="row" style="background: linear-gradient(to right, rgba(22, 80, 226, 0.95) 0%, rgba(126, 81, 236, 0.95) 100%);  opacity: 0.7;"> 
   <div class="  m-5 mx-auto  text-center text-white">
    <h1 class="mb-1">CHAT</h1>

  </div>
</div>

</div>



<!--  alljobs   div  -->
<div class="container-fluid" style="background-color: #f0f3fa">



 <div class="row m-0 py-3 " >


  <div class="card col-lg-3 col-md-3 col-sm-12">
    
    <div class="container  ">
       
    </div>
  </div>
  <div class="col-lg-7 col-md-7 col-sm-12">
    <div class=" card col-10 px-0 mx-auto">
      <div class="card-header bg-info text-white" > 
        <h2 class="card-title  ">Get In Touch</h2>

      </div>
      <div class="container py-2">
       <form action=""  method="post">

        <div class="form-group pmd-textfield pmd-textfield-floating-label">
          <label class="control-label text-danger" >To</label>

        </div>
        <div class="form-group pmd-textfield pmd-textfield-floating-label">

          <label ><?php echo($row['emailid'])?></label>

        </div>
        
        <div class="form-group pmd-textfield pmd-textfield-floating-label">
          <label class="control-label text-danger ">Message</label>
          <textarea  class="form-control"  cols="5"  rows="5" name="textarea" ></textarea>
        </div>

        <div class="form-group pmd-textfield pmd-textfield-floating-label col-12 mx-auto" >
          <input type="submit" name="Submit" class="btn pmd-ripple-effect text-white pmd-btn-flat col-4" style="background: linear-gradient(to right, rgba(22, 80, 226, 0.95) 0%, rgba(126, 81, 236, 0.95) 100%);
}">
          <input type="reset" name="reset" class="btn pmd-ripple-effect btn-danger pmd-btn-flat col-4" >

        </div>
      </form>
    </div>
  </div>
</div>

<div class="card col-lg-2 col-md-2 col-sm-12">
 
  <div class="container">
   
  </div>
</div>





</div>



</div>


<footer class="container-fluid bg-dark " style="height: 100px; ">
  <div class="text-center">

   <p style="color:white"b class="py-4">Made by Mehra Creative © 2020</p>
 </div>
</footer>





</body>
</html>
