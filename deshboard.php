<?php

include"connection.php";
if (!isset($_SESSION['user'])) {
  header('location:login.php');
  
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>user deshboard</title>
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
        <a class="nav-link" href="#" style="color: black;"><button class="btn btn-info"> Creat Resume</button></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid " style=" height: 150px; width: 100%; background-image: url('desk8.jpg');  background-repeat: no-repeat;  background-position: center; background-size: 100%;font: 15px Roboto, sans-serif; ">
  <div class="row"> 
   <div class="  m-5 mx-auto  text-center text-white">
    <h1 class="mb-1">User Deshboard</h1>

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
            <div class="card-header bg-info text-white">
             <h3 class="card-title">My Dashboard</h3> 
           </div> 
           <div class="card-body text-center item-user border-bottom"> 
            <div class="profile-pic">
             <div class="profile-pic-img"> 
              <?php
              $id=$_SESSION['user'];
              $sel= " SELECT * FROM `userregistation` where user_id=$id ";  
              $val=mysqli_query($con,$sel);
              $fetch= mysqli_fetch_assoc($val);

              ?>
              <span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="" data-original-title="online"> </span>
              <img src="imageupload/<?php echo $fetch['resume'] ?>" class="brround" alt="user" height="100"> 
            </div> 
            <a href="userprofile.html" class="text-dark">
              <h4 class="mt-3 mb-0 font-weight-semibold"><?php echo $fetch['firstname'] ?></h4>
            </a> 
          </div>
        </div>
        <div class="item1-links desbo mb-0 px-4" class="tab">
         <a  href="#" class=" info active d-flex border-bottom py-2  text-dark " class="tablinks" onclick="openCity(event, 'info')" id="defaultOpen"  >
           <span class="icon1 mr-2"><i class="far fa-user-circle"></i></span> Profile
         </a>
         <a  href="#" class=" edit active d-flex border-bottom py-2  text-dark " class="tablinks" onclick="openCity(event, 'London')"   >
           <span class="icon1 mr-2"><i class="fas fa-user-edit"></i></span> Edit Profile 
         </a>
         <a href="#" class="d-flex  border-bottom py-2 text-dark" class="tablinks" onclick="openCity(event, 'jobapp')" >
           <span class="icon1 mr-2"><i class="fas fa-briefcase"></i>
           </span> Applied Jobs </a>
            <a href="orders.html" class="d-flex  border-bottom py-2 text-dark" class="tablinks" onclick="openCity(event, 'calletter')">
               <span class="icon1 mr-2"><i class="far fa-paper-plane"></i>
               </span> View Call Letters </a> 


           <a href="#" class="  d-flex  border-bottom py-2 text-dark" class="tablinks" onclick="openCity(event, 'managejob')">
             <span class="icon1 mr-2"><i class="far fa-comments"></i>
             </span> Chat </a>

            

               <a href="settings.html" class="d-flex border-bottom py-2 text-dark">
                 <span class="icon1 mr-2"><i class="fas fa-cog"></i>
                 </span> Settings </a> 
                 <a href="login.html" class="d-flex py-2 text-dark">
                  <span class="icon1 mr-2"><i class="fas fa-sign-out-alt"></i>
                  </span> Logout </a> 
                </div> 
              </div> 
              <div class="card my-select">
               <div class="card-header"> 
                <h3 class="card-title">Search Classes</h3>
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





    <!---2nd section div-->
    <div class="col-lg-8 col-md-8 col-sm-12 mt-3 d-inline-block" >
      <!---profile-->

      <div  id="info" class="tabcontent" >
       <div  class="col-lg-11 col-md-12 col-sm-12   d-inline-block  px-0"   style=" border-radius:5px">
         <?php
         $id=$_SESSION['user'];
         $sq = mysqli_query($con , " SELECT * FROM `userregistation` where user_id=$id ");
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
                        <div class="col-xs-7 controls"><?php echo $roww['firstname'];?></div>
                        <!-- col-sm-10 --> 
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="row mgbt-xs-0">
                        <label class="col-xs-5 control-label">Last Name:</label>
                        <div class="col-xs-7 controls"><?php echo $roww['lastname'] ?></div>
                        <!-- col-sm-10 --> 
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="row mgbt-xs-0">
                        <label class="col-xs-5 control-label">Email Id:</label>
                        <div class="col-xs-7 controls"><?php echo $roww['emailid'] ?></div>
                        <!-- col-sm-10 --> 
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="row mgbt-xs-0">
                        <label class="col-xs-5 control-label">Mobile :</label>
                        <div class="col-xs-7 controls"><?php echo $roww['mobileno'] ?></div>
                        <!-- col-sm-10 --> 
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="row mgbt-xs-0">
                        <label class="col-xs-5 control-label">City:</label>
                        <div class="col-xs-7 controls"><?php echo $roww['usercity'] ?></div>
                        <!-- col-sm-10 --> 
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="row mgbt-xs-0">
                        <label class="col-xs-5 control-label">Pin Code:</label>
                        <div class="col-xs-7 controls"><?php echo $roww['zip'] ?></div>
                        <!-- col-sm-10 --> 
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="row mgbt-xs-0">
                        <label class="col-xs-5 control-label">Birthday:</label>
                        <div class="col-xs-7 controls"><?php echo $roww['dob'] ?></div>
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
                      <h3 class=" font-semibold"><i class="fa fa-file-text-o text-info"></i> EXPERIENCE</h3>
                       <div class="col-sm-6">
                      <div class="row mgbt-xs-0">
                        <label class="col-xs-5 control-label">Experience:</label>
                        <div class="col-xs-7 controls"><?php echo $roww['lastname'] ?></div>
                        <!-- col-sm-10 --> 
                      </div>
                    </div>
                     <div class="col-sm-6">
                      <div class="row mgbt-xs-0">
                        <label class="col-xs-5 control-label">Project Name:</label>
                        <div class="col-xs-7 controls"><?php echo $roww['lastname'] ?></div>
                        <!-- col-sm-10 --> 
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="row mgbt-xs-0">
                        <label class="col-xs-5 control-label">Key Skills:</label>
                        <div class="col-xs-7 controls"><?php echo $roww['lastname'] ?></div>
                        <!-- col-sm-10 --> 
                      </div>
                    </div>


                    </div>
                  <hr class="pd-10">
                  <div class="p-4">
                    <h3 class=" font-semibold"><i class="fa fa-trophy text-info"></i> EDUCATION</h3>
                     <div class="col-sm-6">
                      <div class="row mgbt-xs-0">
                        <label class="col-xs-5 control-label">Higher Education:</label>
                        <div class="col-xs-7 controls"><?php echo $roww['lastname'] ?></div>
                        <!-- col-sm-10 --> 
                      </div>
                    </div>
                     <div class="col-sm-6">
                      <div class="row mgbt-xs-0">
                        <label class="col-xs-5 control-label">Percentage:</label>
                        <div class="col-xs-7 controls"><?php echo $roww['lastname'] ?></div>
                        <!-- col-sm-10 --> 
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="row mgbt-xs-0">
                        <label class="col-xs-5 control-label">Passing Year:</label>
                        <div class="col-xs-7 controls"><?php echo $roww['lastname'] ?></div>
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



    <!--edit pro-->
    <div  id="London" class="tabcontent edit1" >
     <div  class="col-lg-11 col-md-12 col-sm-12   d-inline-block px-0 "   style=" border-radius:5px">
       <div class="card mb-0"> 
        <div class="card-header bg-info text-white "> 
          <h3 class="card-title">Edit Profile</h3>
        </div> 
        <div class="card-body"> 
          <div class="row">
           <div class="col-sm-6 col-md-6">
            <div class="form-group"> 
              <label class="form-label">First Name</label> 
              <input type="text" class="form-control" placeholder="Enter First Name"> 
            </div>
          </div> 
          <div class="col-sm-6 col-md-6">
            <div class="form-group"> 
              <label class="form-label">Last Name</label>
              <input type="text" class="form-control" placeholder="Enter Last Name"> 
            </div>
          </div>
          <div class="col-sm-6 col-md-6"> 
            <div class="form-group"> 

              <label class="form-label">DOB</label> 
              <input type="date" class="form-control" placeholder="Enter DOB">
            </div>
          </div> 

          <div class="col-sm-6 col-md-6">
           <div class="form-group"> 
            <label class="form-label">Phone Number</label> 
            <input type="number" class="form-control" placeholder="Enter Moblie number"> 
          </div> 
        </div> 
        <div class="col-sm-6 col-md-6">
          <div class="form-group"> 
            <label class="form-label">Key Skills</label> 
            <input type="text" class="form-control" placeholder="Enter Your Skills"> 
          </div>
        </div> 
        <div class="col-sm-6 col-md-6">
          <div class="form-group"> 
            <label class="form-label">Project</label>
            <input type="text" class="form-control" placeholder="Enter Projects Here"> 
          </div>
        </div>
        <div class="col-md-12"> 
          <div class="form-group"> 
            <label class="form-label">Address</label>
            <input type="text" class="form-control" placeholder="Enter Address"> 
          </div> 
        </div> 
        <div class="col-sm-6 col-md-4"> 
          <div class="form-group"> 
            <label class="form-label">City</label> 
            <input type="text" class="form-control" placeholder=" EnterCity">
          </div> 
        </div> 
        <div class="col-sm-6 col-md-3">
         <div class="form-group"> 
          <label class="form-label">Postal Code</label>
          <input type="number" class="form-control" placeholder="Enter ZIP Code"> 
        </div> 
      </div>
      <div class="col-md-5"> 
        <div class="form-group"> 
          <label class="form-label">Experience</label>
          <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search select2-hidden-accessible" data-placeholder="Select" data-select2-id="3" tabindex="-1" aria-hidden="true"> 
            <optgroup label="Categories">
              <option data-select2-id="5">--Select--</option> 
              <option value="0">0</option> 
              <option value="1">1</option> 
              <option value="2">2</option> 
              <option value="3">3</option> 
              <option value="4">4</option> 
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option> 
              <option value="8">8</option>
              <option value="9">9</option> 
              <option value="10">10</option>

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
        <label class="form-label">Higher Education</label> 
        <input type="text" class="form-control" placeholder="Enter Higher Education"> 
      </div> 
    </div> 
    <div class="col-sm-6 col-md-6"> 
      <div class="form-group"> 
        <label class="form-label">Passing Year</label>
        <input type="text" class="form-control" placeholder="Enter Passing Year"> 
      </div> 
    </div> 
    <div class="col-sm-6 col-md-6">
      <div class="form-group"> 
        <label class="form-label">Percentage</label> 
        <input type="text" class="form-control" placeholder="Enter Percentage"> 
      </div> 
    </div> 
    <div class="col-sm-6 col-md-6"> 
      <div class="form-group"> 
        <label class="form-label">Emailid</label> 
        <input type="email" class="form-control" placeholder="Enter Your Emailid"> 
      </div> 
    </div> 
    <div class="col-md-12"> 
      <div class="form-group"> 
        <label class="form-label">About Me</label> 
        <textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea> 
      </div> 
    </div>
    <div class="col-sm-6 col-md-6"> 
      <div class="form-group mb-0"> 
        <label class="form-label">Upload Image</label> 
        <div class="custom-file"> 
          <input type="file" class="custom-file-input" name="example-file-input-custom"> 
          <label class="custom-file-label">Choose image</label> 
        </div> 
      </div>
    </div> 
    <div class="col-sm-6 col-md-6"> 
      <div class="form-group mb-0"> 
        <label class="form-label">Upload Resume</label> 
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






<!---manage jobs-->


<div  class="col-lg-12 col-md-12 col-sm-12 px-0"  >
  <div id="managejob" class="tabcontent col-lg-12 px-0">
    <div class="card" > 

      <div class="card-header bg-info text-white" >
        <h3 class="card-title">Chat </h3>
      </div>
      <div class="card-body"> 
        <div class="col-12">
          

        </div>
        


      </div>
      <div class="card-footer bg-light-50">
        <input type="submit" class="btn btn-success ">
      </div>



    </div> 
  </div>
</div>



<!---view jobs application tab-->
<div  class="col-lg-12 col-md-12 col-sm-12 px-0 "  >
  <div id="jobapp" class="tabcontent col-lg-12 px-0">


    <div class="card" > 

      <div class="card-header bg-info text-white " >
        <h3 class="card-title">Applied Jobs</h3>
      </div>
      <div class="card-body table-responsive p-0" > 

        <table  class="table table-striped">
          <thead class="text-uppercase text-info text-nowrap">

            <th>Jobtitle</th>
            <th>company name</th>
            <th>jb type</th>
            <th>salary</th>
            <th>status</th>
            <th>Applied Date</th>
            <th>JOB Detail</th>


          </thead>
          <tbody class="">

            <?php
            $id=$_SESSION['user'];
            $sel= " SELECT * FROM `appliedjobs` where user_id=$id ";  
            $val=mysqli_query($con,$sel);
            $fetch= mysqli_fetch_assoc($val);




            $rel="SELECT appliedjobs.job_id, appliedjobs.user_id, jobs.jb_title , jobs.jb_type , jobs.comname , jobs.salary, appliedjobs.status,
            appliedjobs.dateofapplied 
            FROM ((appliedjobs
            INNER JOIN jobs ON appliedjobs.job_id = jobs.jb_id)
            INNER JOIN userregistation ON appliedjobs.user_id = userregistation.user_id) where  appliedjobs.user_id=$id ";

            $vall= mysqli_query($con, $rel);



            while ($roww = mysqli_fetch_assoc($vall)) 
            {
              ?>
              <tr>

                <td><?php echo $roww['jb_title']?></td>
                <td><?php echo $roww['comname']?></td>
                <td><?php echo $roww['jb_type']?></td>
                <td><?php echo $roww['salary']?></td>
                <td>  <?php echo $roww['status']?>  </td>

                <td>  <?php echo $roww['dateofapplied']?></td>
                <td> <a  class="badge badge-success" href="jobdetail.php?id=<?php echo $roww['job_id']?>"  >View Details</a></td>

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


<!---view letter-->


<div  class="col-lg-12 col-md-12 col-sm-12 px-0 "  >
  <div id="calletter" class="tabcontent col-lg-12 px-0 ">


    <div class="card" > 

      <div class="card-header bg-info text-white " >
        <h3 class="card-title">View Call letter</h3>
      </div>
      <div class="card-body table-responsive p-0" > 

        <table  class="table table-striped">
          <thead class="text-uppercase text-info text-nowrap">

            <th>Jobtitle</th>
            <th>company name</th>
            <th>jb type</th>
            <th>salary</th>
            <th>status</th>
            <th>Applied date</th>
            <th>Letter</th>


          </thead>
          <tbody class="">

            <?php
            $id=$_SESSION['user'];
            $sel= " SELECT * FROM `appliedjobs` where user_id=$id ";  
            $val=mysqli_query($con,$sel);
            $fetch= mysqli_fetch_assoc($val);




            $rel="SELECT appliedjobs.id, appliedjobs.job_id, appliedjobs.user_id, jobs.jb_title , jobs.jb_type , jobs.comname , jobs.salary, appliedjobs.status,
            appliedjobs.dateofapplied 
            FROM ((appliedjobs
            INNER JOIN jobs ON appliedjobs.job_id = jobs.jb_id)
            INNER JOIN userregistation ON appliedjobs.user_id = userregistation.user_id) where  appliedjobs.user_id=$id and  appliedjobs.status='Accpeted' ";

            $vall= mysqli_query($con, $rel);



            while ($roww = mysqli_fetch_assoc($vall)) 
            {
              ?>
              <tr>

                <td><?php echo $roww['jb_title']?></td>
                <td><?php echo $roww['comname']?></td>
                <td><?php echo $roww['jb_type']?></td>
                <td><?php echo $roww['salary']?></td>
                <td>  <?php echo $roww['status']?>  </td>

                <td>  <?php echo $roww['dateofapplied']?></td>
                <td> <a  class="badge badge-success" href="letter.php?id=<?php echo $roww['id']?>"  >View letter</a></td>

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


 <!-- $('.desbo a').click(function(){
           return false;
         }) -->

       </div>
     </div>




     <footer class="container-fluid bg-dark" style="height: 100px">
      <div class="text-center">

       <p style="color:white"b class="py-4">Made by Mehra Creative © 2020</p>
     </div>
   </footer>
   <script>
    $(document).ready(function(){

      $('.desbo a').click(function(){
       return false;
     })
    }

    )


    $(document).ready(function(){
  $(".edit").click(function(){
    $(".edit1").fadeIn(3000);
  });
});
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