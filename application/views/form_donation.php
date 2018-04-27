<?php  
$id_user=$this->input->get("id_user");
// echo "$id_binatang";
?>
<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<html>

<head>
	<title>PetFinder</title>
	<meta  charset=iso-8859-1" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/stylecontact1.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style4.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/paging.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/sidebar.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/reset1.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/stylee1.css"> <!-- Resource style -->
	<script src="<?php echo base_url(); ?>/assets/js/modernizr1.js"></script> <!-- Modernizr -->
	<link href="<?php echo base_url(); ?>/assets/css/styleadopt.css" rel="stylesheet" type="text/css" />
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

<form class="cd-form floating-labels" action="<?php echo base_url(); ?>/index.php/welcome/insertform" method="post">
<input type="hidden" name="id_user" id="id_user" value="<?php echo $id_user ?>">
		<fieldset>
	
	<div class="error-message">
				<p>PLEASE ENTER A VALID INFORMATION</p>
			</div>
			<div class="icon">
				<label>Account Name</label>
				<input class="budget" type="text" name="nama_rek" id="nama_rek" required>
		    </div>
			<div class="icon">
				<label>Account Number</label><br>
				<input class="budget" type="number" name="no_rek" id="no_rek" required>
		    </div>
		    <div class="icon">
				<label>Bank Name</label>
				<input class="budget" type="text" name="nama_bank" id="nama_bank" required>
		    </div>
		    <div class="icon">
				<label>Quantity</label><br>
				<input class="budget" type="number" name="jumlah_donasi" id="jumlah_donasi" required>
		    </div>
		    <div>
		      	<input type="submit" value="Send Information">
		    </div>
		</fieldset>
</form>
<script src="<?php echo base_url(); ?>/assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/main.js"></script> <!-- Resource jQuery -->




								</ul>
						</div>

						<div id="sidebar">
						
						     <div class="connect">
							    <h2>Follow Us</h2>
								<ul>
									<li><a class="facebook" href="">Facebook</a></li>
									<li><a class="subscribe" href="">Subscribe</a></li>
									<li><a class="twitter" href="">Twitter</a></li>
									<li><a class="flicker" href="">Flicker</a></li>
								<ul>
							 </div>
							 <br><br>
						     <div>
						     	<a href="<?php echo base_url(); ?>/index.php/welcome/viewdonate"><img src="<?php echo base_url(); ?>/assets/images/donate-heart.png" width="150" height="150"></a>
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