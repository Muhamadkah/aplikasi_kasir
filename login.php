<?php
error_reporting(0);
session_start();
include "configuration/config_etc.php" ;
include "configuration/config_include.php" ;
include 'configuration/config_connect.php';
$queryback="SELECT * FROM data";
    $resultback=mysqli_query($conn,$queryback);
    $rowback=mysqli_fetch_assoc($resultback);
    $footer=$rowback['nama'];
$bg=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM backset"));
$bgi=$bg['loginbg'];
connect(); timing();
?>
<html lang="en">
<head>
  <title><?php echo $footer;?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="page/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="page/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="page/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="page/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="page/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="page/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="page/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="page/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="page/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="page/css/util.css">
  <link rel="stylesheet" type="text/css" href="page/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  
  <div class="container-login100" style="background-image: url('images.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
      <form action="op.php" method="post" class="login100-form validate-form">
        <span class="login100-form-title p-b-37">
          <b><?php echo $footer;?></b></a>
          <img src="dist/img/p.png" width="80%" alt="">
        </span>

        <div class="wrap-input100 validate-input m-b-20" data-validate="Masukan username">
          <input class="input100" type="text" name="txtuser" placeholder="username">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-25" data-validate = "Masukan password">
          <input class="input100" type="password" name="txtpass" placeholder="password">
          <span class="focus-input100"></span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Sign In
          </button>
        </div>

        <div class="text-nowrap" style="width: 8rem;">
          <strong >
            &nbsp;&nbsp;&nbsp;
          </strong>
        </div>

        

        
     
        
        

        
        <div class="text-center p-t-57 p-b-20">
<?php if($bg['demo']!='0'){?>
          <table class="table">

              <tr>
                <th>Demo</th>
                <th>User</th>
                 <th>Pass</th>
              </tr>
              
              <tr>
                <td>admin</td>
                <td>admin</td>
                 <td>admin</td>
              </tr>
              <tr>
                <td>kasir</td>
                <td>kasir</td>
                <td>kasir</td>
              </tr>


          </table>
<?php } ?>

        <span class="login100-form-title p-b-37">
         <p class="login-box-msg"> Point of Sales<br/>Copyright © 2024 Kelompok 4.</p>
        </span>

        </div>

        <div class="text-center">
          
        </div>

        <br>
    

  
      </form>

      
    </div>
  </div>
  
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="page/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="page/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="page/vendor/bootstrap/js/popper.js"></script>
  <script src="page/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="page/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="page/vendor/daterangepicker/moment.min.js"></script>
  <script src="page/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="page/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="page/js/main.js"></script>

</body>
</html>