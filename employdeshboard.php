<?php

include"connection.php";
if (!isset($_SESSION['emuser'])) {
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="icon.css">
  <script src="assets/owl-carousel/owl.carousel.js"></script>
  <style>

    body {font-family: "Lato", sans-serif;}

    /* Style the tab */
    .tab {
      float: left;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
      width: 30%;
      height: 300px;
    }

    /* Style the buttons inside the tab */
    .tab button {
      display: block;
      background-color: inherit;
      color: black;
      padding: 22px 16px;
      width: 100%;
      border: none;
      outline: none;
      text-align: left;
      cursor: pointer;
      transition: 0.3s;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      float: left;


      border-left: none;

    }
    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;

      border-radius: 5px;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    .navtx a:hover {
      color: green;
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
      <a  href="logout.php" class="nav-link " href="registation.php" style="  color: white"><i class='fas fa-user ' style='font-size:14px;color: white'></i>&nbsp;Logout</a>
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
    <ul class="navbar-nav navtx" >
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black;">Blogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black">Pages</a>
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
        <a class="nav-link" href="#" style="color: black;"><button class="btn btn-info"> Creat Resume</button></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid " style=" height: 150px; width: 100%; background-image: url('desk8.jpg');  background-repeat: no-repeat;  background-position: center; background-size: 100%;font: 15px Roboto, sans-serif; ">
  <div class="row"> 
   <div class="  m-5 mx-auto  text-center text-white">
    <h1 class="mb-1">Employer Deshboard</h1>

  </div>
</div>

</div>



<div class="container-fluid py-4" style="background-color: #f0f3fa">

  <!---deshboard-->
  <div class="row p-2 " >

    <div class="col-lg-4 col-md-4 col-sm-12 mt-3  d-inline-block" >
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12  d-inline-block " style=" border-radius:5px">
        </div>

        <div class="col-lg-10 col-md-10 col-sm-12  d-inline-block " style=" border-radius:5px">
          <div class="card"> 
            <div class="card-header bg-info text-white ">
             <h3 class="card-title ">My Dashboard</h3> 
           </div> 
           <div class="card-body text-center item-user border-bottom"> 
            <div class="profile-pic">
             <div class="profile-pic-img"> 
              <?php
              $id=$_SESSION['emuser'];
              $sel= " SELECT * FROM `employregistation` where em_id=$id ";  
              $val=mysqli_query($con,$sel);
              $fetch= mysqli_fetch_assoc($val);

              ?>
              <span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="" data-original-title="online"> </span>
              <img src="imageupload/<?php echo $fetch['em_image'] ?>"  class="brround " alt="user" height="100"> 
            </div> 
            <a href="userprofile.html" class="text-dark">
              <h4 class="mt-3 mb-0 font-weight-semibold text-uppercase text-info"><?php echo $fetch['em_conpername'] ?></h4>
            </a> 
          </div>
        </div>
        <div class="item1-links desbo mb-0 px-4" class="tab">
         <a  href="#" class=" info active d-flex border-bottom py-2  text-dark ab " class="tablinks" onclick="openCity(event, 'info')" id="defaultOpen"  >
           <span class="icon1 mr-2"><i class="far fa-user-circle"></i></span> Profile
         </a>
         <a  href="#" class=" edit active d-flex border-bottom py-2  text-dark ab " class="tablinks" onclick="openCity(event, 'London')"   >
           <span class="icon1 mr-2"><i class="fas fa-user-edit"></i></span> Edit Profile 
         </a>
         <a  href='#' class="postjob d-flex border-bottom py-2 text-dark ab" class="tablinks" onclick="openCity(event, 'Paris')">
          <span class="icon1 mr-2"><i class="fas fa-plus-circle"></i></span> Post Jobs
        </a>
        <a href="#" class="  d-flex  border-bottom py-2 text-dark ab" class="tablinks" onclick="openCity(event, 'managejob')">
         <span class="icon1 mr-2"><i class="fas fa-briefcase"></i>
         </span> Managed Jobs </a>
         <a href="#" class="d-flex  border-bottom py-2 text-dark ab"  class="tablinks" onclick="openCity(event, 'jobapp')" >
           <span class="icon1 mr-2"><i class="far fa-eye"></i>
           </span> View Job Applications </a>

           <a href="employdeshboard.php #mess " class="d-flex  border-bottom py-2 text-dark "  class="tablinks" onclick="openCity(event, 'callletter')">
             <span class="icon1 mr-2"><i class="fab fa-facebook-messenger"></i>
             </span> Send Message </a> 


             <a href="settings.html" class="d-flex border-bottom py-2 text-dark ab">
               <span class="icon1 mr-2"><i class="fas fa-cog"></i>
               </span> Settings </a> 
               <a href="logout.php" class="d-flex py-2 text-dark logout">
                <span class="icon1 mr-2"><i class="fas fa-sign-out-alt"></i>
                </span> Logout </a> 
              </div> 
            </div> 
            <div class="card my-select">
             <div class="card-header  bg-success text-white"> 
              <h3 class="card-title">Search </h3>
            </div> <div class="card-body"> 
              <div class="form-group">
               <input type="text" class="form-control" id="text" placeholder="What are you looking for?"> 
             </div>
             <div class="form-group"> 
              <select name="country" id="select-countries" class="form-control custom-select select2-show-search select2-hidden-accessible" data-select2-id="select-countries" tabindex="-1" aria-hidden="true">
                <option value="1" selected="" data-select2-id="2">All Categories
                </option>
                <option value="2">Web Security</option> 
                <option value="3">Offline</option>
                <option value="4">Business</option>
                <option value="5">Online</option>
                <option value="6">Data Science</option>
                <option value="7">Driving</option> 
                <option value="8">Education</option> 
                <option value="9">Electronics</option>
                <option value="10">Pets &amp; Offline</option> 
                <option value="11">Computer</option>
                <option value="12">Mobile</option>
                <option value="13">Events</option> 
                <option value="14">Python</option> 
                <option value="15">Security Hacking</option>
              </select>

            </div>
            <div class="">
              <a href="#" class="btn btn-block btn-primary">Search</a>
            </div>
          </div>
        </div> 



      </div>
    </div>
  </div>




  <!---2nd -->
  <div class="col-lg-8 col-md-8 col-sm-12 mt-3 d-inline-block" >

    <!---profile-->
    <div  id="info" class="tabcontent" >
     <div  class="col-lg-11 col-md-12 col-sm-12   d-inline-block  px-0"   style=" border-radius:5px">
       <?php
       $id=$_SESSION['emuser'];
       $sq = mysqli_query($con , " SELECT * FROM `employregistation` where em_id=$id ");
       $roww = mysqli_fetch_assoc($sq);
       ?>
       <div class="card mb-0"> 
       
        <div class="card-body"> 

          <div class="tab-content">
            <div id="profile-tab" class="tab-pane active">
              <div class="pd-20 ">

                
                <div class="row p-4 m-0">
                   <h3 class="col-12 px-0 font-semibold   "><i class="fas fa-info-circle text-info"></i> ABOUT</h3>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">First Name:</label>
                      <div class="col-xs-7 controls"><?php echo $roww['em_companyname'];?></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Last Name:</label>
                      <div class="col-xs-7 controls"><?php echo $roww['em_companyname'];?></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Email Id:</label>
                      <div class="col-xs-7 controls"><?php echo $roww['em_companyname'] ?></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Mobile :</label>
                      <div class="col-xs-7 controls"><?php echo $roww['em_companyname'] ?></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">City:</label>
                      <div class="col-xs-7 controls"><?php echo $roww['em_companyname'] ?></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Pin Code:</label>
                      <div class="col-xs-7 controls"><?php echo $roww['em_companyname'] ?></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Birthday:</label>
                      <div class="col-xs-7 controls"><?php echo $roww['em_companyname'] ?></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Interests:</label>
                      <div class="col-xs-7 controls">Basketball, Web, Design, etc.</div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Website:</label>
                      <div class="col-xs-7 controls"></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Phone:</label>
                      <div class="col-xs-7 controls">+1-234-5678</div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                </div>
                <hr class="pd-10">
                
                <div class=" p-4 ">
                  <h3 class=" font-semibold"><i class="fa fa-file-text-o text-danger"></i> EXPERIENCE</h3>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Experience:</label>
                      <div class="col-xs-7 controls"><?php echo $roww['em_companyname'] ?></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Project Name:</label>
                      <div class="col-xs-7 controls"><?php echo $roww['em_companyname'] ?></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Key Skills:</label>
                      <div class="col-xs-7 controls"><?php echo $roww['em_companyname'] ?></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>


                </div>
                <hr class="pd-10">
                <div class="p-4">
                  <h3 class=" font-semibold"><i class="fa fa-trophy text-warning"></i> EDUCATION</h3>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Higher Education:</label>
                      <div class="col-xs-7 controls"><?php echo $roww['em_companyname'] ?></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Percentage:</label>
                      <div class="col-xs-7 controls"><?php echo $roww['em_companyname'] ?></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row mgbt-xs-0">
                      <label class="col-xs-5 control-label">Passing Year:</label>
                      <div class="col-xs-7 controls"><?php echo $roww['em_companyname'] ?></div>
                      <!-- col-sm-10 --> 
                    </div>
                  </div>

                </div>            
              </div>
            </div>
            <!-- row -->
            <hr class="pd-10">

          </div>
          <!-- row --> 
        </div>
        <!-- pd-20 --> 
      </div>
      <!-- home-tab -->

    </div> 

  </div>

<!--edit profile-->
  <div  id="London" class="tabcontent" >
   <div  class="col-lg-11 col-md-12 col-sm-12   d-inline-block  px-0"   style=" border-radius:5px">
    <div class="card mb-0"> 
      <div class="card-header bg-info text-white "> 
        <h3 class="card-title">Edit Profile</h3>
      </div> 
      <div class="card-body"> 
        <div class="row">
         <div class="col-sm-6 col-md-6">
          <div class="form-group"> 
            <label class="form-label">Email Id</label> 
            <input type="email" class="form-control" placeholder="Enter emailid"> 
          </div>
        </div> 
        <div class="col-sm-6 col-md-6">
          <div class="form-group"> 
            <label class="form-label">Password</label>
            <input type="Password" class="form-control" placeholder=" Enter Password"> 
          </div>
        </div>
        <div class="col-sm-6 col-md-6"> 
          <div class="form-group"> 

            <label class="form-label">Company Name</label> 
            <input type="email" class="form-control" placeholder="Enter company name">
          </div>
        </div> 

        <div class="col-sm-6 col-md-6">
         <div class="form-group"> 
          <label class="form-label">Phone Number</label> 
          <input type="number" class="form-control" placeholder=" Enter mobile number"> 
        </div> 
      </div> 
      <div class="col-md-12"> 
        <div class="form-group"> 
          <label class="form-label">Office Address</label>
          <input type="text" class="form-control" placeholder="Enter Office Address"> 
        </div> 
      </div> 
      <div class="col-sm-6 col-md-4"> 
        <div class="form-group"> 
          <label class="form-label">City</label> 
          <input type="text" class="form-control" placeholder="City">
        </div> 
      </div> 
      <div class="col-sm-6 col-md-3">
       <div class="form-group"> 
        <label class="form-label">Postal Code</label>
        <input type="number" class="form-control" placeholder="ZIP Code"> 
      </div> 
    </div>
    <div class="col-md-5"> 
      <div class="form-group"> 
        <label class="form-label">Country</label>
        <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search select2-hidden-accessible" data-placeholder="Select" data-select2-id="3" tabindex="-1" aria-hidden="true"> 
          <optgroup label="Categories">
            <option data-select2-id="5">--Select--</option> 
            <option value="1">Germany</option> 
            <option value="2">Real Estate</option> 
            <option value="3">Canada</option> 
            <option value="4">Usa</option> 
            <option value="5">Afghanistan</option>
            <option value="6">Albania</option>
            <option value="7">China</option> 
            <option value="8">Denmark</option>
            <option value="9">Finland</option> 
            <option value="10">India</option>
            <option value="11">Kiribati</option>
            <option value="12">Kuwait</option> 
            <option value="13">Mexico</option> 
            <option value="14">Pakistan</option> 
          </optgroup>
        </select>
        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="4" style="width: 330.156px;">
          <span class="selection">
            <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-3h49-container"><span class="select2-selection__rendered" id="select2-3h49-container" role="textbox" aria-readonly="true" title="--Select--"></span>
            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
          </span>
        </span>
        <span class="dropdown-wrapper" aria-hidden="true"></span>
      </span>
    </div> 
  </div> 
  <div class="col-sm-6 col-md-6"> 
    <div class="form-group"> 
      <label class="form-label">Contect Person's Name</label> 
      <input type="text" class="form-control" placeholder="Contect Person's Name"> 
    </div> 
  </div> 
  <div class="col-sm-6 col-md-6"> 
    <div class="form-group"> 
      <label class="form-label">Designation</label>
      <input type="text" class="form-control" placeholder="Designation"> 
    </div> 
  </div> 
  <div class="col-sm-6 col-md-6">
    <div class="form-group"> 
      <label class="form-label">Alter Emild Id</label> 
      <input type="email" class="form-control" placeholder="Alter Emild Id"> 
    </div> 
  </div> 
  <div class="col-sm-6 col-md-6"> 
    <div class="form-group"> 
      <label class="form-label">Enter Your website name</label> 
      <input type="text" class="form-control" placeholder="Enter Your website name"> 
    </div> 
  </div> 
  <div class="col-md-12"> 
    <div class="form-group"> 
      <label class="form-label">About company</label> 
      <textarea rows="5" class="form-control" placeholder="Enter About your Company"></textarea> 
    </div> 
  </div>
  <div class="col-md-12"> 
    <div class="form-group mb-0"> 
      <label class="form-label">Upload Image</label> 
      <div class="custom-file"> 
        <input type="file" class="custom-file-input" name="example-file-input-custom"> 
        <label class="custom-file-label">Choose file</label> 
      </div> 
    </div>
  </div> 
</div> 
</div> 
<div class="card-footer"> 
  <button type="submit" class="btn btn-primary">Updated Profile</button> 
</div> 
</div>

</div>
</div>


<!-- for post job tab-->
<div id="Paris" class="tabcontent">
  <div  class="col-lg-11 col-md-12 col-sm-12 px-0" >
    <div class="card"> 
      <form action="postjob.php" method="Post"  enctype="multipart/form-data">
        <div class="card-header  bg-info text-white">
          <h3 class="card-title">Post A Job</h3>
        </div>
        <div class="card-body"> 


          <div class="form-group">
            <label class="form-label text-dark">Job Title</label>
            <input type="text" class="form-control" name="jtitle" placeholder="Enter job title here" required="">
          </div> 
          <div class="row">
            <div class="col-sm-6 col-md-6"> 
              <div class="form-group text-dark" data-select2-id="42">
                <label class="form-label"> Job Type</label>
                <select class="form-control select2-show-search select2-hidden-accessible" data-placeholder="Choose one (with searchbox)" data-select2-id="1" tabindex="-1" aria-hidden="true" name="type">
                  <optgroup label="catagories" data-select2-id="43"> 
                    <option value="0" data-select2-id="3">Select Option</option> 
                    <option value="Full Time Jobs" data-select2-id="44">Full Time Jobs</option>
                    <option value="Part Time Jobs" data-select2-id="45">Part Time Jobs</option> 
                    <option value="Work From Home" data-select2-id="46">Work From Home</option>
                    <option value="Internships" data-select2-id="47">Internships</option>
                  </optgroup> 
                </select>
              </div> </div> <div class="col-sm-6 col-md-6"> 
                <div class="form-group text-dark" data-select2-id="26"> 
                  <label class="form-label"> Role</label>
                  <select class="form-control select2-show-search select2-hidden-accessible" data-placeholder="Choose one (with searchbox)" data-select2-id="4" tabindex="-1" aria-hidden="true" name="jrole">
                    <optgroup label="" data-select2-id="30">
                      <option value="0" data-select2-id="6">Select Option</option>
                      <option value="IT Software" data-select2-id="31">IT Software</option>
                      <option value="Banking" data-select2-id="32">Banking</option>
                      <option value="Finaces" data-select2-id="33">Finaces</option> 
                      <option value="Cook/Chef" data-select2-id="34">Cook/Chef</option>
                      <option value="Driveing" data-select2-id="35">Driveing</option>
                      <option value="HR Recruiter" data-select2-id="36">HR Recruiter</option> 
                      <option value="IT Hardware" data-select2-id="37">IT Hardware</option> 
                      <option value="Sales" data-select2-id="38">Sales</option>
                      <option value="Accountant" data-select2-id="39">Accountant</option> </optgroup> 
                    </select>
                  </div> 
                </div>
              </div> 
              <div class="row">
                <div class="col-sm-6 col-md-6"> 
                  <div class="form-group m-0">

                    <div class="row gutters-xs">
                      <div class="col-6"> 
                        <label class="form-label text-dark">Monthly Salary</label>
                        <input type="number" class="form-control" name="salary" placeholder="Enter Salary"> 
                      </div>
                      <div class="col-6">
                        <label class="form-label text-dark">Number Of Post</label>
                        <input type="number" class="form-control" name="nopost" placeholder="Enter Post"> 
                      </div> 
                    </div> 
                  </div> 
                </div> 
                <div class="col-sm-6 col-md-6"> <div class="form-group">
                  <label class="form-label text-dark">Experience</label> 
                  <div class="row gutters-xs"> 
                    <div class="col-6">
                      <select class="form-control select2-no-search custom-select select2-hidden-accessible" data-select2-id="16" tabindex="-1" aria-hidden="true" name="min">
                        <option value="" data-select2-id="18">Min</option> 
                        <option value="1">0</option> 
                        <option value="2">1</option>
                        <option value="3">2</option> 
                        <option value="4">3</option>
                        <option value="5">4</option>
                        <option value="6">5</option> 
                        <option value="7">6</option>
                        <option value="8">7</option>
                        <option value="9">8</option> 
                        <option value="10">9</option>
                        <option value="11">10</option>
                        <option value="12">11</option> 
                      </select>
                    </div> 
                    <div class="col-6">
                      <select class="form-control select2-no-search custom-select select2-hidden-accessible" data-select2-id="19" tabindex="-1" aria-hidden="true" name="max">
                        <option value="" data-select2-id="21">Max</option>
                        <option value="1">0</option>
                        <option value="2">1</option>
                        <option value="3">2</option>
                        <option value="4">3</option> 
                        <option value="5">4</option> 
                        <option value="6">5</option>
                        <option value="7">6</option> 
                        <option value="8">7</option>
                        <option value="9">8</option> 
                        <option value="10">9</option> 
                        <option value="11">10</option>
                        <option value="12">11</option> 
                      </select>
                    </div> 
                  </div> 
                </div>
              </div> 
            </div>
            <div class="row mt-1"> 
              <div class="col-sm-6 col-md-6">
                <div class="form-group text-dark"> <label class="form-label"> City</label>
                  <input type="text" class="form-control" name="city"  placeholder="Enter city">
                </div> 
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-group text-dark">
                  <div class="form-group mb-0"> 
                    <label class="form-label">Upload Image</label> 
                    <div class="custom-file"> 
                      <input type="file" class="custom-file-input" name="file" required=""> 
                      <label class="custom-file-label">Choose file</label> 
                    </div> 
                  </div>

                </div> 
              </div>
            </div> 
            <div class="row mt-1"> 
              <div class="col-sm-6 col-md-6">
                <div class="form-group text-dark">
                  <label class="form-label"> Key Skills</label>
                  <input type="text" class="form-control" name="skills"  placeholder="Enter key skills here">

                </div> 
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-group text-dark">
                  <label class="form-label"> Desired Candidate Profile</label>
                  <input type="text" class="form-control" name="profile"  placeholder="Enter Desired Candidate Profile here">

                </div> 
              </div>
            </div> 
            <div class="row mt-1"> 
              <div class="col-sm-6 col-md-6">
                <div class="form-group text-dark">
                  <label class="form-label">Time  of interview</label>
                  <input type="time" class="form-control" name="time"  placeholder="Enter interview time">

                </div> 
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-group text-dark">
                  <label class="form-label"> Interview Date</label>
                  <input type="date" class="form-control" name="interdate"  placeholder="Enter interview date">

                </div> 
              </div>
            </div> 
            <div class="form-group text-dark">
              <label class="form-label text-dark">Job Description</label>
              <textarea class="form-control" name="des" rows="5" placeholder="text here.." required="">

              </textarea>
            </div>
            <h3 class="card-title mt-6 mb-3">Recruiter details 
            </h3>
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label class="form-label">Hiring for (Company name)</label> 
                  <input type="text" class="form-control" name="comname" placeholder=""> 
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-group"> 
                  <label class="form-label">Email</label> 
                  <input type="email" class="form-control" name="em" placeholder="Email Address" required="">
                </div> 
              </div>
              <div class="col-sm-6 col-md-6"> 
                <div class="form-group mb-0"> 
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control" placeholder="Number" name="mn" required=""> </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-group mb-0">
                    <label class="form-label">Address</label> 
                    <input type="text" class="form-control" name="add" placeholder="Address">
                  </div> 
                </div> 
              </div> 

            </div>
            <div class="card-footer bg-light-50 text-center">
              <input type="submit" name="submit" class="btn btn-success col-lg-4">
              <input type="reset" class="btn btn-info col-lg-4 ">
            </div>
          </form>
        </div> 
      </div>
    </div>



    <!---manage jobs-->


    <div  class="col-lg-12 col-md-12 col-sm-12 px-0"  >
      <div id="managejob" class="tabcontent col-lg-12 px-0">
        <div class="card" > 

          <div class="card-header bg-info text-white " >
            <h3 class="card-title">Manage Jobs</h3>
          </div>
          <div class="card-body table-responsive p-0 "> 

            <table  class="table table-striped ">
              <thead class="text-info">
                <th>No</th>
                <th>Company</th>
                <th>Job Title</th>
                <th>Location</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Statusact</th>
                <th>Action</th>


              </thead>
              <tbody>

                <?php
                $id=$_SESSION['emuser'];
                $sel= " SELECT * FROM `jobs` where emid=$id ";  
                $val=mysqli_query($con,$sel);
                $i=1;
                while ($fetch= mysqli_fetch_assoc($val)) 
                {
                  ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $fetch['comname']?></td>

                    <td><?php echo $fetch['jb_title']?></td>
                    <td><?php echo $fetch['city']?></td>
                    <td><?php echo $fetch['salary']?></td>
                    <td  > 
                      <span class="status1"  id="aa1<?php echo $fetch['jb_id']?>" ><?php echo $fetch['status']?></span> </td>
                      <td>


                        <span class="icon1 mr-2 badge badge-success  actjob" id="<?php echo $fetch['jb_id']?>"> <a href="#" class=" py-2 text-white">active</a>
                        </span>


                        <span class="icon1 mr-2  badge badge-danger deactjob" id="<?php echo $fetch['jb_id']?>"><a href="#" class=" py-2 text-white  ">deactive  </a> 
                        </span>

                      </td>

                      <td>

                       <a href="" class=" py-2 text-dark dd" data-toggle="modal" id="<?php echo $fetch['jb_id']?>"  data-target="#myModal">
                         <span class="icon1 mr-2"><i class="  far fa-eye "></i>
                         </span>
                       </a> &nbsp; &nbsp;
                       <a href="#" class=" py-2 text-dark " >
                        <span class="icon1 mr-2"><i class=" far fa-edit"></i>
                        </span>
                      </a> &nbsp; &nbsp;
                      <a href="#" class=" py-2 text-dark">
                        <span class="icon1 mr-2 "><i class="fa fa-trash" aria-hidden="true"></i>
                        </span>
                      </a>  



                    </td>
                    <?php $i++;?>

                  </tr>

                  <?php
                }
                ?>     

              </tbody>



            </table>
            <!-- The Modal -->
            <div class="modal bg-transparent" id="myModal" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header bg-info text-white">
                    <h4>Job Detail</h4>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body"  id="jobview">
                    <?php echo $fetch['comname']?>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>


          </div>



        </div> 
      </div>
    </div>



    <!---view jobs application tab-->
    <div  class="col-lg-12 col-md-12 col-sm-12 px-0"  >
      <div id="jobapp" class="tabcontent col-lg-12 px-0" >


        <div class="card" > 

          <div class="card-header bg-info text-white " >
            <h3 class="card-title">Jobs Applications</h3>
          </div>
          <div class="card-body table-responsive p-0"> 

            <table  class="table table-striped jbap" id="tabl">
              <thead class="text-uppercase text-info">
                <th>No</th>
                <th>Jobtitle</th>
                <th>company</th>
                <th>username</th>
                <th>mobileno</th>
                <th>Resume</th>
                <th>status</th>

                <th>action</th>

              </thead>
              <tbody>

                <?php
                $id=$_SESSION['emuser'];
                $sel= " SELECT * FROM `appliedjobs` where employer_id=$id ";  
                $val=mysqli_query($con,$sel);
                $fetch= mysqli_fetch_assoc($val);
                $jbid= $fetch['job_id'];
                $uid= $fetch['user_id'];



                $rel="SELECT  appliedjobs.id,appliedjobs.employer_id,appliedjobs.status, jobs.jb_title , jobs.jb_type , jobs.comname, userregistation.emailid,  userregistation.mobileno,
                userregistation.resume FROM ((appliedjobs
                INNER JOIN jobs ON appliedjobs.job_id = jobs.jb_id)
                INNER JOIN userregistation ON appliedjobs.user_id = userregistation.user_id) where  appliedjobs.employer_id=$id ";

                $vall= mysqli_query($con, $rel);

                $count=mysqli_num_rows($vall);


                $i=1;

                while ($roww = mysqli_fetch_assoc($vall)) 
                {
                  ?>
                  <tr class="sss">
                     <td ><?php echo $i;?></td>

                    <td ><?php echo $roww['jb_title']?></td>
                    <td><?php echo $roww['comname']?></td>
                    <td><?php echo $roww['emailid']?></td>
                    <td><?php echo $roww['mobileno']?></td>
                    <td>   

                      <span class="badge badge-success " > <a href="imageupload/<?php echo $roww['resume']?>" style="text-decoration: none; color: white" download> download</a>
                      </span> </td>
                      <td  ><span  class="status" id="aa<?php echo $roww['id']?>"> <?php echo $roww['status'] ?> </span> </td>

                      <td class="accept"> 
                       <span class="badge badge-info act " id="<?php echo $roww['id']?>" > <a href="#"  style="text-decoration: none; color: white" > Accept </a></span>

                       <span  class="badge badge-danger  rej" id="<?php echo $roww['id']?>" ><a href="#"  style="text-decoration: none; color: white" > Reject </a></span>
                     </td>
                      <?php $i++;?>

                     <?php  

                     ?>
                   </tr>

                   <?php
                 }


                 ?>     

               </tbody>

             </table>


           </div>

         </div> 
       </div>
     </div>

     <!---send call letter tab-->
     <div  class="col-lg-12 col-md-12 col-sm-12 px-0" id="mess" >
      <div id="callletter" class="tabcontent col-lg-12 px-0" >


        <div class="card" > 

          <div class="card-header bg-info text-white " >
            <h3 class="card-title">Send Call Letters</h3>
          </div>
          <div class="card-body table-responsive p-0"> 

            <table  class="table table-striped jbap" id="tabl">
              <thead class="text-uppercase text-info">
                <th>No</th>
                <th>Jobtitle</th>
                <th>company</th>
                <th>username</th>
                <th>mobileno</th>
                <th>Resume</th>
                <th>status</th>

                <th>send</th>

              </thead>
              <tbody>

                <?php
                $id=$_SESSION['emuser'];
                $sel= " SELECT * FROM `appliedjobs` where status=$id ";  
                $val=mysqli_query($con,$sel);
                $fetch= mysqli_fetch_assoc($val);
                $jbid= $fetch['job_id'];
                $uid= $fetch['user_id'];



                $rel="SELECT  appliedjobs.id,appliedjobs.employer_id,appliedjobs.status, jobs.jb_title , jobs.jb_type , jobs.comname, userregistation.emailid,  userregistation.mobileno,
                userregistation.resume FROM ((appliedjobs
                INNER JOIN jobs ON appliedjobs.job_id = jobs.jb_id)
                INNER JOIN userregistation ON appliedjobs.user_id = userregistation.user_id) where  appliedjobs.status='Accpeted' and appliedjobs.employer_id=$id ";

                $vall= mysqli_query($con, $rel);

                $count=mysqli_num_rows($vall);



               $i=1;
                while ($roww = mysqli_fetch_assoc($vall)) 
                {
                  ?>
                  <tr class="sss">
                     <td><?php echo $i;?></td> 
                    <td ><?php echo $roww['jb_title']?></td>
                    <td><?php echo $roww['comname']?></td>
                    <td><?php echo $roww['emailid']?></td>
                    <td><?php echo $roww['mobileno']?></td>
                    <td>   

                      <span class="badge badge-success " > <a href="imageupload/<?php echo $roww['resume']?>" style="text-decoration: none; color: white" download> download</a>
                      </span> </td>
                      <td  ><span  class="status" id="aa<?php echo $roww['id']?>"> <?php echo $roww['status'] ?> </span> </td>

                      <td class="accept"> 
                       <span  > <a  href="sendletter.php?id=<?php echo $roww['id']  ?>" style="text-decoration: none"> <i class="far fa-paper-plane"  style='font-size:24px ; color: black'></i></a></span>

                     </td>
                     <?php  $i++;?>

                    
                   </tr>

                   <?php
                 }

                 ?>     

               </tbody>

             </table>




          </div>

        </div> 
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
<script>
  $(document).ready(function(){

    $('.ab').click(function(){
     return false;
   })


    $('.dd').click(function(){
      var data= $(this).attr("id");

      $.ajax({
        type: "POST",
        url: "jobdetail.php",
        data: 'id='+data,
        cache: false,
        success:function(data){

          $("#jobview ").html(data);
          $(".name").val("");
        }
      });
    })

    







//   THIS script for accept ction and load accept on page
$('.act').click(function(){
 return false;
})


$('.act').click(function(){
  var data= $(this).attr("id");
  var dat= $(this).attr("id");

  $.ajax({
    type: "POST",
    url: "jobappaction.php",
    data: 'id='+data,
    cache: false,
    success:function(data){
      $("#aa"+dat).html("Accepted");
      $("#aa"+dat).css("color","green");
    }
  });


});




//   THIS script for reject ction and load rejecpt on page
$('.rej').click(function(){
 return false;
})


$('.rej').click(function(){
  var data= $(this).attr("id");
  var dat= $(this).attr("id");

  $.ajax({
    type: "POST",
    url: "jobappaction.php",
    data: 'idd='+data,
    cache: false,
    success:function(data){
      $("#aa"+dat).html("Rejected");
      $("#aa"+dat).css("color","red");

    }
  });


});


      //   THIS script for active job status and load rejecpt on page
      $('.actjob').click(function(){
       return false;
     })


      $('.actjob').click(function(){
        var datar= $(this).attr("id");
        var dat= $(this).attr("id");

        $.ajax({
          type: "POST",
          url: "jobstatus.php",
          data: 'ida='+datar,
          cache: false,
          success:function(data){
            $("#aa1"+dat).html("active");
            

          }
        });


      });



      //   THIS script for deactive job status and load rejecpt on page
      $('.deactjob').click(function(){
       return false;
     })


      $('.deactjob').click(function(){
        var dataa= $(this).attr("id");
        var dat= $(this).attr("id");

        $.ajax({
          type: "POST",
          url: "jobstatus.php",
          data: 'idk='+dataa,
          cache: false,
          success:function(data){
            $("#aa1"+dat).html("deactive");
            

          }
        });


      });





})
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