<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<html>

<head>
	<title>About Us</title>
	<meta  charset=iso-8859-1" />
	<link href="<?php echo base_url(); ?>/assets/css/styleabout.css" rel="stylesheet" type="text/css" />
	<!--[if IE 6]>
		<link href="css/ie6.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if IE 7]>
        <link href="css/ie7.css" rel="stylesheet" type="text/css" />  
	<![endif]-->
</head>

<body>

	<div id="header">
                <a href="<?php echo base_url(); ?>/index.php/welcome" id="logo"><img src="<?php echo base_url(); ?>/assets/images/logo.jpg" width="310" height="114" alt="" title=""></a>
          <ul class="navigation">
            <li><a href="<?php echo base_url(); ?>/index.php/welcome">Home</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>/index.php/welcome/viewabout">About us</a></li>
            <li><a href="<?php echo base_url(); ?>/index.php/welcome/viewadopt">Adoption</a></li>
            <li><a href="<?php echo base_url(); ?>/index.php/welcome/viewdonate">Donation</a></li>
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
							<div class="about">
							     <h2>A Few Words About Us</h2>
							     <br>
                                 	<ul>
									<li>
										<a href="index.html"><img src="<?php echo base_url(); ?>/assets/images/about1.jpg" width="280" height="200" alt="Pet Shop" title="Pet Shop"></a>
										<p>The Petfinder is a non-profit organization that has rescued, rehabilitated pets here in Bali. We aim to relieve suffering, starvation, abuse and neglect of these animals with the help of volunteers, adoptions, sponsorship and donations.</p>
										<br>
										<p>At Petfinder we provide medical care, food, rehabilitation, bedding, sterilization, vaccinations and a whole lot of love to all pets and puppies within the centre. We educate the local school children on how to care for and respect animals and hold fundraisers to raise awareness amongst the Balinese and worldwide community.We want all our pets to have a long, loving and sustainable life. Adoption and foster care is available to suitable homes, however some of our dogs are not adoptable. Some have lost limbs or suffered severe illness and are still in recovery. It is these dogs that will live out their retirement with us. To sustain this care we rely on sponsorships and donations from people near and far to ensure each of our furry friends have a healthy and happy life.</p>
										<br>
										<p>Petfinder runs its own clinic called Good Karma, in Bali, where the animals receive medical care, food and shelter. Good Karma is where all pets are physically and mentally assessed, then treated including full vaccinations and sterilizations. Even if a dog has the slightest chance at life we will do everything possible to give the animal a chance of good health and a happy life.</p>
									</li>						
							</div>
						</div>
						
					    <div id="sidebar">
						
						
						        <div class="featured">
								        <h2>Sponsored by</h2>
								        <ul>
											<li>
											    <a href="<?php echo base_url(); ?>/index.php/welcome/viewabout"><img src="<?php echo base_url(); ?>/assets/images/bdr_one_color_logo_mark_small.png" width="155" height="155" alt="Pet Shop" title="Pet Shop"></a>
											    <h2><a href="about.html">DOG SQUAD</a></h2>
												<p>
												   From $20.00 / month
												   </p>
												   <p>
												   
												</p>
												
											</li>
											<li>
												<a href="<?php echo base_url(); ?>/index.php/welcome/viewabout"><img src="<?php echo base_url(); ?>/assets/images/furry-friends-logo.jpg" width="140" height="155" alt="Pet Shop" title="Pet Shop"></a>
											    <h2><a href="about.html">LITTLE LEGENDS</a></h2>
												<p>
												   From $10.00 / month
												   </p>
												<p>
												   
												</p>
												
											</li>
											<li class="last">
											    <a href="<?php echo base_url(); ?>/index.php/welcome/viewabout"><img src="<?php echo base_url(); ?>/assets/images/07071ee041c774ba68a06f9b86e897dd.jpg" width="155" height="155" alt="Pet Shop" title="Pet Shop"></a>
											    <h2><a href="about.html">GENERAL PETS</a></h2>
												<p>
												   From $10.00 / month
												 </p>
												<p>
												</p>
												
											</li>
										</ul>
								</div>			
					    </div>
				   </div>
  
			
			</div>
			
			<div id="footer">
			        <div class="section">
						<ul>
							<img src="<?php echo base_url(); ?>/assets/images/BARC_BeforeAfter-Many.png" width="640" height="160" alt="Pet Shop" title="Pet Shop">
						</ul>
					</div>
					<div id="footnote">
						<div class="section">
						   &copy; 2017 <a href="index.html">PetFinder Team</a>. All Rights Reserved.
						</div>
					</div>
			</div>
			
	
</body>
</html>