<?php

include"connection.php";
if (!isset($_SESSION['emuser'])  ) {
	if (!isset($_SESSION['user'])) {
	header('location:login.php');
	}
	else{
		$id= $_GET['id'];
			$sel= " SELECT * FROM `jobs` where jb_id=$id ";  
                $val=mysqli_query($con,$sel);
                $fetch= mysqli_fetch_assoc($val);

	}
 
}
else{
$id=$_POST['id'];
$sel= " SELECT * FROM `jobs` where jb_id=$id ";  
                $val=mysqli_query($con,$sel);
                $fetch= mysqli_fetch_assoc($val);
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
  <style type="text/css">
  	.aa{
font:   15px/30px Georgia, serif;

  	}
  	.spn{
  		font: italic bold 16px/30px Georgia, serif;

  	}
  </style>
 
</head>
<body>

<!-- <table class="table  table-striped">
<tbody>

<tr class="aa">
	<td colspan="3"><span class="spn text-uppercase">  <?php echo $fetch['jb_title']  ?> </span></td>
	
</tr>
<tr class="aa">
	<td><img src="imageupload/<?php echo $fetch['image']?>" style="height: 40px; width: 60px"  > </td>

	<td><span class="spn text-uppercase"> Job type: </span><?php echo $fetch['jb_type']  ?></td>
	<td>Job role:<?php echo $fetch['jb_role']  ?></td>

</tr>
<tr class="aa">
	<td>Salary:<?php echo $fetch['salary']  ?></td>
	<td>city:<?php echo $fetch['city']  ?></td>

</tr>
<tr class="aa">
	<td>Company name:<?php echo $fetch['comname']  ?></td>
	<td>Emailid:<?php echo $fetch['email']  ?></td>

</tr>
<tr class="aa">
	<td>Mobile NO:<?php echo $fetch['mobile']  ?></td>
	<td>Number of post:<?php echo $fetch['noofpost']  ?></td>

</tr>
<tr class="aa">
	<td>Skills:<?php echo $fetch['skills']  ?></td>
	<td>Profile :<?php echo $fetch['profile']  ?></td>

</tr>

<tr class="aa">
	<td colspan="2">Des:<?php echo $fetch['jobdes']  ?></td>
	

</tr>




</tbody>	


</table>  --> 

<section class="jd-header  ">
		<div class="top">
			<div class="jd-top-head">
				<header>
					<h4 class="jd-header-title" title="Wipro is Hiring GET For Java Profile_6 Months exp. Job Location_noida">
						<?php echo $fetch['jb_title']  ?>
					</h4>
				</header>
				<div class="jd-header-comp-name">
					<a  title="WIPRO HR SERVICES INDIA PVT LTD Careers" class="pad-rt-8"><?php echo $fetch['comname']  ?>
					</a>
				</div>
				<div class="jd-header-comp-name">
					<a   class="pad-rt-8 text-info"><?php echo $fetch['jb_type']  ?>
					</a>
				</div>
			</div>
			<div class="left">
				<div class="exp">
					<em class="naukicon naukicon-bag"></em>
					<i class="fas fa-briefcase"></i>
					<span><?php echo $fetch['ex_min']  ?>- <?php echo $fetch['ex_max']  ?> years</span>
				</div>
				<div class="salary"><em class="naukicon naukicon-salary"></em>
					<i class="fas fa-wallet"></i>
					<span>₹ <?php echo $fetch['salary']  ?> - 3,00,000 P.A. </span>
				</div>
				<div class="loc">
					<em class="naukicon naukicon-location">

					</em>
					<span class="location ">
						<i class="fas fa-map-marker-alt"></i>
						<a  title="J2Ee Jobs in Gurgaon">
							<?php echo $fetch['city']  ?>
						</a>
					</span>
					
				</div>
				<div class="text-success">Time and Venue
				</div>
				<div class="walkin">
					<em class="naukicon naukicon-clock">

					</em>
					<span>4th March&nbsp;, 11 AM  onwards
					</span>
				</div>
				<div class="venue">
					<em class="text-danger">
						Address:
					</em>
					<span><?php echo $fetch['address']  ?> </span>
				</div>
				<div class="contact">
					<em class="text-danger">
						Contact:
					</em>
					<span>Shrimi Singh&nbsp;</span>
				</div>
				<div class="email">
					<em class="text-danger">
						Emailid:
					</em>
					<span><?php echo $fetch['email']  ?></span>
				</div>
				<div class="mobile">
					<em class="text-danger">
						Contect Number:
					</em>
					
					<span><?php echo $fetch['mobile']  ?></span>
				</div>
				<div class="education">
					
					<span class="text-uppercase text-success" >Education &nbsp;</span><br>
					<label><?php echo $fetch['profile']  ?></label>
					
				</div>
				<div class="education">
					
					<span class="text-uppercase text-success" >Skills &nbsp;</span><br>
					<label><?php echo $fetch['skills']  ?></label>
				</div>

			</div>
			
		</div>

		<div class="bottom">
			<div class="jd-stats">
				<span class="stat">
					<label class="badge badge-warning" >Posted: </label>
					<span><?php echo $fetch['postdate']  ?></span>
				</span>&nbsp;&nbsp;
				<span class="stat">
					<label class="badge badge-warning" >No of post: </label>
					<span><?php echo $fetch['noofpost']  ?></span>
				</span>&nbsp;&nbsp;
				<span class="stat">
					<label class="badge badge-warning" >Status: </label>
					<span ><?php echo $fetch['status']  ?></span>
				</span>
			</div>
			
		</div>
		<div class="lightbox login-layer-modal">
			<div class="crossLayer">
				<span class="icon naukicon naukicon-CrossLayer">
					
				</span>
			</div>
			<div class="drawer-content">
				
			</div>
		</div>
	</section>





   

</body>
</html>