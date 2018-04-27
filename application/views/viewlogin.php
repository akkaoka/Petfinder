<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head> 
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Petfinder Login & Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style2.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">

                <span class="right">
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
               
        <nav class="codrops-demos">

        </nav>
            </header>
            <section>       
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="<?php echo base_url() ?>index.php/login/login_process" autocomplete="on" method="POST"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
                  <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                  <label for="loginkeeping">Keep me logged in</label>
                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
                </p>
                                <p class="change_link">
                  Not a member yet ?
                  <a href="#toregister" class="to_register">Join us</a>
                </p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="<?php echo base_url() ?>index.php/welcome/aksi_register" autocomplete="on" method="POST" enctype="multipart/form-data"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Name</label>
                                    <input id="nama" name="nama" required="required" type="text" placeholder="Your Name" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Birthday</label>
                                    <input id="tgl_lahir" name="tgl_lahir" required="required" type="date" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="col-sm-2 col-sm-2 control-label">Your Gender</label>
                                    
                                    <select class="form-control" name="gender" id="gender">  
                                       <option value="">-- Choose Your Gender --</option>  
                                       <option value="Male">Male</option>  
                                       <option value="Female">Female</option>
                                   </select>
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Address</label>
                                    <input id="alamat" name="alamat" required="required" type="text" placeholder="Your Address" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" >Your email</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" >Your Phone Number</label>
                                    <input id="telp" name="telp" required="required" type="number" placeholder="+628123XXXX"/> 
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Username</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p>
                                    <label> Your Picture </label>
                                    <input id="gambar" name="gambar" required="required" type="file" placeholder="eg. X8df!90EO" accept=".png, .jpg, .jpeg" />
                                </p>
                                <p class="signin button"> 
                                  <input type="submit" value="Sign up"/> 
                                </p>
                                <p class="change_link">  
                  Already a member ?
                  <a href="#tologin" class="to_register"> Go and log in </a>
                </p>
                            </form>
                        </div>
            
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>