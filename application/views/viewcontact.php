<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<html>

<head>
	<title>PetFinder</title>
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
            <li><a href="<?php echo base_url(); ?>/index.php/welcome/viewdonate">Donation</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>/index.php/welcome/viewcontact">Contact us</a></li>
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
							   <h2>Contact us</h2>
							   <div>
								   <p>
									We make it easy for you to communicate with us as admin this page.
									This page provides a telephone number that you can call in accordance with a caption.
									If you have questions or complaints please <span><a href="<?php echo base_url(); ?>/index.php/welcome/viewcontact">contact us</a></span>. &nbsp; We are very pleased to serve you! :)
								   </p>
							   </div>
							   
							   <ul class="connect">
									<li>
										<h2>Customer Sales and Service</h2>
										<p>
										  <span>E-mail: <a href="contact.html">foundpetfinder.com</a></span>
										  <span>Call or e-mail us for help with any aspect of your purchase, online or offline.</span>
										</p>
										<p>
										  <span>Call toll-free: +62361 888 812</span>
										  <span>Call toll-free: +6281 946 498 7345</span>
										  <span>Call toll-free: +6285 777 346 6951</span>
										</p>
									</li>
									<li>
										<h2>Office Hours</h2>
										<p>
										  <span>Monday to Friday 9:00 am - 7:00 pm</span>
										  <span>Closed Saturday and Sunday</span>
										</p>
										
									</li>
									<li>
										<h2>Mailing Address</h2>
										<p>
										  <span>Petfinder</span>
										  <span>Nusa Indah Street</span>
										  <span>4th Floor</span>
										  <span>Denpasar</span>
										  <span>Bali</span>
										</p>
									</li>
								</ul>
							   
						</div>
						
					    <div id="sidebar">
						
						     <div class="connect">
							    <h2>Follow Us</h2>
								<ul>
									<li><a class="facebook" href="contact.html">Facebook</a></li>
									<li><a class="subscribe" href="contact.html">Subscribe</a></li>
									<li><a class="twitter" href="contact.html">Twitter</a></li>
									<li><a class="flicker" href="contact.html">Flicker</a></li>
								<ul>
							 </div>
							 <br><br>
							 <b><span>&nbsp;DONATE NOW!</span><b>
						     <div>
						     	<a href="<?php echo base_url(); ?>/index.php/welcome/viewdonate"><img src="<?php echo base_url(); ?>/assets/images/donation.png" width="230" height="60"></a>
						     </div>
								
					    </div>
				   </div>
			
			</div>
			
			<div id="footer">
					<div id="footnote">
						<div class="section">
						   &copy; 2011 <a href="index.html">Petshop</a>. All Rights Reserved.
						</div>
					</div>
			</div>
			
	
</body>
</html>