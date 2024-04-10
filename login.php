<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Medical Shop With Digital Drawer</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="medical/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="medical/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="medical/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="medical/assets/images/favicon.png" />
  </head>
  <body>
    <?php 
      $con=mysqli_connect("localhost","root","","medicine_drawer_db")or die("database error ...");
   ?>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form action="login.php" method="POST">
                  <div class="form-group">
                    <label>Username or email *</label>
                    <input type="text" name="uname" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" name="pass" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    
                     <a href="#" class="forgot-pass">Forgot password</a> 
                  </div>
                  <div class="text-center">
                    <button type="submit" name="save" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                
                  <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p> 
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="medical/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="medical/assets/js/off-canvas.js"></script>
    <script src="medical/assets/js/hoverable-collapse.js"></script>
    <script src="medical/assets/js/misc.js"></script>
    <script src="medical/assets/js/settings.js"></script>
    <script src="medical/assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
<?php
if(isset($_POST['save']))
{
  
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    
    $res=mysqli_query($con,"select * from admin where usrname='".$uname."' && password='".$pass."'");
    $row=mysqli_fetch_row($res);


    $sh=mysqli_query($con,"select * from registration where USERNAME='".$uname."' && PASSWORD='".$pass."'");
    $sh1=mysqli_fetch_row($sh);

    

   if($num=mysqli_num_rows($res)>0)
     {
     session_start();
     $_SESSION['admin']=$row[0];
    echo'
    <script>
   window.location.href="admin/index.php";
    </script>
    ';
    }

    else if($num2=mysqli_num_rows($sh)>0)
     {
     session_start();
     $_SESSION['muser']=$sh1[0];

      echo'
      <script>
     window.location.href="medical/index.php";
      </script>
      ';
      }

    else
    {
        echo'
    <script>
    alert("Wrong Username & Password ");
   window.location.href="login.php";
    </script>
    ';
    }
}
?>