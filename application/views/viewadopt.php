<!DOCTYPE html >
<!--  Website template by freewebsitetemplates.com  -->
<html>

<head>
  <title>PetFinder</title>
  <meta  charset=iso-8859-1" />
    <link href="<?php echo base_url(); ?>/assets/css/style4.css" rel="stylesheet" />
    <!-- <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/datatables/dataTables.bootstrap.css">
<!--     <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    Theme style
    <link href="<?php echo base_url(); ?>/assets/css/stylee.css" rel="stylesheet" type="text/css" /> -->
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
            <li class="active"><a href="<?php echo base_url(); ?>/index.php/welcome/viewadopt">Adoption</a></li>
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
                 
             
            <div class="search">
                  <input type="text" name="s" value=""><button>&nbsp;</button>
            </div>
                
                <div class="content">       
                <ul>
                  <table id="keywords" cellspacing="0" cellpadding="0">
                      <thead>
                        <tr>
                          <th><span>Picture</span></th>
                          <th><span>Name</span></th>
                          <th><span>Species</span></th>
                          <th><span>Gender</span></th>
                          <th><span>Age</span></th>
                          <th><span>Condition</span></th>
                          <th><span>Size</span></th>
                          <th><span>Action</span></th>
                        </tr>
                      </thead>
                      <tbody>
                      
                      <?php 
                     
                    foreach ($binatang as $value) {
                      
                      $id_binatang=$value->id_binatang;
                      $nama_binatang=$value->nama_binatang;
                      $jenis_binatang=$value->jenis_binatang;
                      $gender=$value->gender;
                      $umur=$value->umur;
                      $kondisi=$value->kondisi;
                      $size=$value->size;
                      $gambar=$value->gambar; 
                    ?>

                    <tr>
                      <td><img src="<?php echo base_url("images/binatang/$gambar") ?>" style="max-width: 150px; max-height: 200px;"></td>
                      <td><?php echo "$nama_binatang"; ?></td>
                      <td><?php echo "$jenis_binatang"; ?></td>
                      <td><?php echo "$gender"; ?></td>
                      <td><?php echo "$umur"; ?></td>
                      <td><?php echo "$kondisi"; ?></td>
                      <td><?php echo "$size"; ?></td>
  
                      <td><button><a href="<?php echo base_url(); ?>/index.php/welcome/download_adopt?id_binatang=<?php echo $id_binatang; ?>">Adopt</a></button>
                      </td>
                              <?php
                                  
                              }
                              ?>
                                  </tr>
                      </tbody>
                    </table>  
                
            </div>
            
              <div id="sidebar">
 
              </div>
           </div>
           
           <div class="featured">
                <ul>
              
            </ul>
                
           </div>
          
      
      </div>
      
      <div id="footer">
              <div class="section">
            
          </div>
          <div id="footnote">
            <div class="section">
               &copy; 2011 <a href="index.html">Petfinder</a>. All Rights Reserved.
            </div>
          </div>
      </div>
        <script>
          $(function () {
            $('#example2').DataTable();
          });
        </script>
        <script src="<?php echo base_url(); ?>/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/datatables/dataTables.bootstrap.min.js"></script>
</body>

</html>