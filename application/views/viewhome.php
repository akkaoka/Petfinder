<!DOCTYPE html >
<html>
<head>
	<title>PetFinder</title>
	<meta charset=iso-8859-1" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
	
</head>

<body>

      <div id="header">
          <a href="<?php echo base_url(); ?>/index.php/welcome" id="logo"><img src="<?php echo base_url(); ?>/assets/images/logo.jpg" width="310" height="114" alt="" title=""></a>
          <ul class="navigation">
            <li class="active"><a href="<?php echo base_url(); ?>/index.php/welcome">Home</a></li>
            <li><a href="<?php echo base_url(); ?>/index.php/welcome/viewabout">About us</a></li>
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
			
					<div class="banner">&nbsp;</div>
					
			       <div id="content">
				   
				        <div class="content">
								<ul>
									<li>
										<img src="<?php echo base_url(); ?>/assets/images/alli-2.jpg" width="114" height="160" alt="PetFinder" title="PetFinder">
										<h2>Alli</h2>
										<p>Alli was the only one from her litter that did not get over the fear of being touched by people. <a class="more" href="<?php echo base_url(); ?>/index.php/welcome/viewadopt">View all</a></p>
									</li>
									<li>
										<img src="<?php echo base_url(); ?>/assets/images/bella2.jpg" width="114" height="160" alt="PetFinder" title="PetFinder">
										<h2>Bella</h2>
										<p>As this small skinny dog climbed out of a pile of rubbish while looking for food. <a class="more" href="<?php echo base_url(); ?>/index.php/welcome/viewadopt">View all</a></p>
									</li>
									<li>
										<img src="<?php echo base_url(); ?>/assets/images/bianca2.jpg" width="114" height="160" alt="PetFinder" title="PetFinder">
										<h2>Bianca</h2>
										<p>Bianca was cowering under the car with her back legs paralyzed, she has been hit by a car. <a class="more" href="<?php echo base_url(); ?>/index.php/welcome/viewadopt">View all</a></p>
									</li>
									<li>
										<img src="<?php echo base_url(); ?>/assets/images/einstein.jpg" width="114" height="160" alt="PetFinder" title="PetFinder">
										<h2>Einstein</h2>
										<p>Found as a tiny white puppy in a rice field, Einstein had a mild skin condition but he didn't let it slow him down! <a class="more" href="<?php echo base_url(); ?>/index.php/welcome/viewadopt">View all</a></p>
									</li>
								</ul>
						</div>
						
					    <div id="sidebar">
					    	<img src="<?php echo base_url(); ?>/assets/images/save.png" width="290" height="200" alt="PetFinder" title="PetFinder">
					    	<a href="<?php echo base_url(); ?>/index.php/welcome/viewdonate"><center><img src="<?php echo base_url(); ?>/assets/images/donate.gif" width="150" height="140"></center></a>
					    </div>
				   </div>
			</div>
			
			<div id="footer">
				<div class="section">
						<ul>
							<li>
								<img src="<?php echo base_url(); ?>/assets/images/friendly-pets.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="index.html">Friendly Pets</a></h2>
								<p>
								   Pets are more than just animals. Our furry, feathered, attention, and as safe and comfortable a home as we do.
								</p>
							</li>	
							<li>
								<img src="<?php echo base_url(); ?>/assets/images/pet-lover2.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="index.html">How dangerous are they</a></h2>
								<p>
								    Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain.
								</p>
							</li>	
							<li>
								<img src="<?php echo base_url(); ?>/assets/images/healthy-dog.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
								<h2><a href="index.html">Keep them healthy</a></h2>
								<p>
								A pet owner's responsibility is to be aware of the things they can do in order to keep their pets healthy.
								</p>
							</li>	
							<li>
								
								<h2><a href="index.html">Love your pets</a></h2>
								<p>
								Pet owners love to show affection for their pets by showering them with toys, fancy collars, clothes and even doggy strollers.
								</p>
								<img src="<?php echo base_url(); ?>/assets/images/pet-lover.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">
							</li>	
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