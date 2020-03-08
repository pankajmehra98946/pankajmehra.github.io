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
      <a class="nav-link " href="registation.php" style="  color: white"><i class='fas fa-user ' style='font-size:14px;color: white'></i>&nbsp;Logout</a>
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



<div class="container-fluid py-4" style="background-color: #e6e6e6">

  <!---deshboard-->
  <div class="row p-2" >

    <div class="col-lg-4 col-md-4 col-sm-12 mt-3  d-inline-block" >
      <div class="col-lg-12 col-md-12 col-sm-12  d-inline-block " style="height: 400px; border-radius:5px">
        <div class="card"> 
          <div class="card-header">
           <h3 class="card-title">My Dashboard</h3> 
         </div> 
         <div class="card-body text-center item-user border-bottom"> 
          <div class="profile-pic">
           <div class="profile-pic-img"> 
            <span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="" data-original-title="online"> </span>
            <img src="clerk.svg" class="brround" alt="user" height="100"> 
          </div> 
          <a href="userprofile.html" class="text-dark">
            <h4 class="mt-3 mb-0 font-weight-semibold">Robert McLean</h4>
          </a> 
        </div>
      </div>
      <div class="item1-links  mb-0 px-4">
          <a href="mydash.html" class="active d-flex border-bottom">
           <span class="icon1 mr-2"><i class="fas fa-user "></i></span> Edit Profile 
         </a>
           <a href="myjobs.html" class=" d-flex border-bottom">
            <span class="icon1 mr-2"><i class="fas fa-user "></i></span> Applied Jobs
          </a>
           
          <a href="manged.html" class="d-flex  border-bottom">
             <span class="icon1 mr-2"><i class="fas fa-user "></i>
             </span> Managed Jobs </a>
          
           <a href="orders.html" class="d-flex  border-bottom">
             <span class="icon1 mr-2"><i class="fas fa-user "></i>
             </span> View Call Letters </a> 
            
             <a href="settings.html" class="d-flex border-bottom">
               <span class="icon1 mr-2"><i class="fas fa-user "></i>
               </span> Settings </a> 
               <a href="login.html" class="d-flex">
                <span class="icon1 mr-2"><i class="fas fa-user "></i>
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
              <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 226px;">
                <span class="selection">
                  <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select-countries-container">
                    <span class="select2-selection__rendered" id="select2-select-countries-container" role="textbox" aria-readonly="true" title="All Categories">All Categories
                    </span>
                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                  </span>
                </span>
                <span class="dropdown-wrapper" aria-hidden="true"></span>
              </span> 
            </div>
            <div class="">
              <a href="#" class="btn btn-block btn-primary">Search</a>
            </div>
          </div>
        </div> 
        <div class="card mb-xl-0">
          <div class="card-header"> 
            <h3 class="card-title">Safety Tips For Buyers</h3> 
          </div> 
          <div class="card-body"> <ul class="list-unstyled widget-spec  mb-0">
           <li class="">
            <i class="fa fa-check text-success" aria-hidden="true"></i> Meet Seller at public Place 
          </li> <li class=""> <i class="fa fa-check text-success" aria-hidden="true"></i> Check item before you buy </li>
          <li class=""> <i class="fa fa-check text-success" aria-hidden="true"></i> Pay only after collecting item </li>
          <li class="ml-5 mb-0"> <a href="tips.html"> View more..</a>
          </li> 
        </ul> 
      </div> 
    </div> 


  </div>
</div>



    <!---edit profile-->
    <div class="col-lg-8 col-md-8 col-sm-12 mt-3 d-inline-block" >
     <div class="col-lg-11 col-md-12 col-sm-12   d-inline-block " style=" border-radius:5px">
      <div class="card mb-0"> 
        <div class="card-header"> 
          <h3 class="card-title">Edit Profile</h3>
        </div> 
        <div class="card-body"> 
          <div class="row">
           <div class="col-sm-6 col-md-6">
            <div class="form-group"> 
              <label class="form-label">First Name</label> 
              <input type="text" class="form-control" placeholder="First Name"> 
            </div>
          </div> 
          <div class="col-sm-6 col-md-6">
            <div class="form-group"> 
              <label class="form-label">Last Name</label>
              <input type="text" class="form-control" placeholder="Last Name"> 
            </div>
          </div>
            <div class="col-sm-6 col-md-6"> 
              <div class="form-group"> 
              
              <label class="form-label">Email address</label> 
              <input type="email" class="form-control" placeholder="Email">
              </div>
            </div> 
          
          <div class="col-sm-6 col-md-6">
           <div class="form-group"> 
            <label class="form-label">Phone Number</label> 
            <input type="number" class="form-control" placeholder="Number"> 
          </div> 
        </div> 
        <div class="col-md-12"> 
          <div class="form-group"> 
            <label class="form-label">Address</label>
            <input type="text" class="form-control" placeholder="Home Address"> 
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
        <label class="form-label">Facebook</label> 
        <input type="text" class="form-control" placeholder="https://www.facebook.com/"> 
      </div> 
    </div> 
    <div class="col-sm-6 col-md-6"> 
      <div class="form-group"> 
        <label class="form-label">Google</label>
        <input type="text" class="form-control" placeholder="https://www.google.com/"> 
      </div> 
    </div> 
    <div class="col-sm-6 col-md-6">
      <div class="form-group"> 
        <label class="form-label">Twitter</label> 
        <input type="text" class="form-control" placeholder="https://twitter.com/"> 
      </div> 
    </div> 
    <div class="col-sm-6 col-md-6"> 
      <div class="form-group"> 
        <label class="form-label">Pinterest</label> 
        <input type="text" class="form-control" placeholder="https://in.pinterest.com/"> 
      </div> 
    </div> 
    <div class="col-md-12"> 
      <div class="form-group"> 
        <label class="form-label">About Me</label> 
        <textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea> 
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



</div>
</div>




<footer class="container-fluid bg-dark" style="height: 100px">
  <div class="text-center">
    
 <p style="color:white"b class="py-4">Made by Mehra Creative © 2020</p>
  </div>
</footer>

</body>
</html>