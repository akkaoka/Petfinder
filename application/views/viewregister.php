<!DOCTYPE html >
<html>
<head>
  <title>PetFinder</title>
  <meta  charset=iso-8859-1" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/styleregister.css">
  
</head>

<body>
 <div class="main">
      <div class="one">
      <form class="form-horizontal" name="form2" method="post" action="<?php echo base_url(); ?>/index.php/register/aksi_register" onsubmit="return val(this)">
        <div class="login-card">
                    <h1>Create an Account</h1><br>
                  <form>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Full Name">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder=""><br><br>
                    <select name="gender">
                      <option value="pilih" selected>--Pilih--</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select></p>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@yahoo.com"><br>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Select Picture">
                    <input type="submit" name="register" class="login login-submit" value="register">
                  </form>
                    
                  <div class="login-help">
                    <p>Already have an account?</p><a href="<?php echo base_url(); ?>/index.php/register">LOGIN HERE!</a> 
                  </div>
                </div>
      </form>        
      </div>
    </div>

  <script type="text/javascript">
            function val(formlogin){
              if (formlogin.username.value == ""){
                alert("Username tidak boleh kosong!");
                formlogin.username.focus();
                return (false);
              }
              if (formlogin.password.value == ""){
                alert("Password tidak boleh kosong!");
                formlogin.password.focus();
                return (false);
              }
            return (true);
            }
    </script>
  </body>
</html>