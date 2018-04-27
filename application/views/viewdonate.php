<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<html>

<head>
	<title>Petfinder</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/stylecontact.css"> <!-- Resource style -->
	
	<meta  charset=iso-8859-1" />
	<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css" />
	<!--[if IE 6]>
		<link href="<?php echo base_url(); ?>/assets/css/ie6.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if IE 7]>
        <link href="<?php echo base_url(); ?>/assets/css/ie7.css" rel="stylesheet" type="text/css" />  
	<![endif]-->
</head>

<body>
		<div id="header">
                <a href="<?php echo base_url(); ?>/index.php/welcome" id="logo"><img src="<?php echo base_url(); ?>/assets/images/logo.jpg" width="310" height="114" alt="" title=""></a>
          <ul class="navigation">
            <li><a href="<?php echo base_url(); ?>/index.php/welcome">Home</a></li>
            <li><a href="<?php echo base_url(); ?>/index.php/welcome/viewabout">About us</a></li>
            <li><a href="<?php echo base_url(); ?>/index.php/welcome/viewadopt">Adoption</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>/index.php/welcome/viewdonate">Donation</a></li>
            <li><a href="<?php echo base_url(); ?>/index.php/welcome/viewcontact">Contact us</a></li>
            &nbsp;&nbsp;&nbsp;

            <?php  
            if (empty($this->session->userdata('username'))) {
            ?>
              <a href="<?php echo base_url(); ?>/index.php/login"><img src="<?php echo base_url(); ?>/assets/images/Login_Button.png" width="90" height="35"></a>
            <?php
            }else{
            ?>
            <a href="<?php echo base_url(); ?>/index.php/welcome/logout"><img src="<?php echo base_url(); ?>/assets/images/Logout_Button.png" width="90" height="35"></a>
            <?php
            }
            ?>           
          </ul>
      </div>
			
			<div id="body">
			
			       <div id="content">
				   
				        <div class="content">
							  
							   
							   <ul class="articles">
									<li>
										<div>
											<span><br></span> 
											<center><h2>Donate Information</h2></center>
											
												   <a class="heart" href="blog.html">&nbsp;</a>
												  <a class="twitter" href="blog.html">&nbsp;</a>
												   <a class="facebook" href="blog.html">&nbsp;</a>
												
										</div>
										<p>
										<img src="<?php echo base_url(); ?>/assets/images/Donate_Polaroids.png" width="560" height="130" aalign="center"/>
										
										</p>

									</li>
									<ul>
									
									<li>
										<p>
										<span><br>
										<b><strong> WHY DO WE NEED YOUR DONATION?</strong></b>
										</span><br>
										<span>
										Our current animals are on recovery phase from the alarming condition. We need your donations to support the survival of these animals. They need a better life by give them a decent foods, shelter and also periodic vacctination.
										</span><br>
										<span>
										If you like to join with us, please kindly give donations as your support. 
										You can tansfer cash donations on the following bank account, and don't forget to take a shot of your recipe and upload on our <strong><b>"CONFIRM"<b></strong> icon on the right side.
										</span><br>
										<span>YOUR DONATION WILL CHANGE THEIR LIFE :) </span>
										</p><br>
									</li>
									</ul>

																	
				   		</div>
				   		<div id="sidebar">
						
						     <div class="connect">
						     <br>
						     <h2>
						     <p>
							  <img src="<?php echo base_url(); ?>/assets/images/cek.png" width="150" height="25">
							</p><br>
							</h2>
							    
							    <ul>
									<p>
										  <img src="<?php echo base_url(); ?>/assets/images/bca.png" width="80" height="25"><br>
										  <span><a href="">731 025 2527</a></span>
										</p><br><br>
										<p>
										  <img src="<?php echo base_url(); ?>/assets/images/mandiri.png" width="70" height="25"><br>
										  <span><a href="">0700 000 899 992</a></span>
										</p><!-- <br><br> -->
<!-- 										<p>
										  <img src="<?php echo base_url(); ?>/assets/images/bni.png" width="80" height="25"><br>
										  <span><a href="">023 827 2088</a></span>
										</p><br><br>
										<p>
										  <img src="<?php echo base_url(); ?>/assets/images/bri.png" width="90" height="25"><br>
										  <span><a href="">0700000899992</a></span>
										</p> -->
								</ul>
							    <h2>
								<ul>
									<img src="<?php echo base_url(); ?>/assets/images/donate.png" width="250" height="250" alt="Pet Shop" title="Pet Shop">
									<center><h3>:::::::::: <a href="<?php echo base_url(); ?>/index.php/welcome/form_donation"><img src="<?php echo base_url(); ?>/assets/images/confirm.png" width="72" height="28"></a> ::::::::::</h3></center>
								</ul>
								
							 </div> 
						</div>  
								
					</div>

				</div>
			
			<div id="footer">
			        
					<div id="footnote">
						<div class="section">
						   &copy; 2017 <a href="index.html">Petfinder</a>. All Rights Reserved.
						</div>
					</div>
			</div>
			
	
</body>
</html>