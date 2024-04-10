<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if(isset($_SESSION['muser']))
{

}
else
{
    echo'
    <script>
     window.location.href="../index.php";
    </script>
    ';
}
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Medical Shop With Digital Drawer</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon"  />
  </head>
  <body>
    <?php 
      $con=mysqli_connect("localhost","root","","medicine_drawer_db")or die("database error ...");
   ?>
       <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
    <?php
    include('sidebr.php');
    ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       <?php
       include('top_menu.php');
       ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <br>
            <br>
            <br>
             <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card" style="border-top: 4px solid red;border-radius: 10px;">
                  <div class="card-body">
                    <h4 class="card-title">CATAGORY</h4>
                    
                    <form class="forms-sample" action="add_catagory.php" method="POST">
                   
                      <div class="form-group">
                        <label for="exampleInputUsername1">CATAGORY</label>
                        <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" name="cname">
                      </div>
                      
                    
                      <button type="submit" class="btn btn-primary mr-2" value="save" name="csave">Submit</button>
                   <button type="reset" class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             
             
             
             
            </div>
        
          
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
       <?php
       include('footer.php');
       ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <!-- </form> -->
  </body>
</html>

<?php 
if(isset($_POST['csave']))
{
  $NAME=$_POST['cname'];
if(mysqli_query($con,"INSERT INTO catagory_name VALUES('','".$NAME."','".$_SESSION['muser']."')"))
  {

    echo "
    <script>
    alert('Catagory Added');
    window.location.href='add_catagory.php';
    </script>
    ";
    }
  else
  {
    echo "
    <script>
    alert('Try Again');
    window.location.href='add_catagory.php';
    </script>
    ";
  }
}
?>