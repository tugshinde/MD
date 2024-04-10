<!-- <!DOCTYPE html> -->
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
    <link rel="shortcut icon"/>
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
            <div class="row">
              <div class="col-lg-6">
                    <a href="purchase.php">
                      <button type="button" class="btn btn-social-icon-text btn-youtube"><i class="mdi mdi-arrow-top-right"></i>Add New Purchase</button>
                    </a>
              </div>
            </div>
            <br>

             <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Purchase Details</h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr style="background-color:#8f5fe8;color: #fff;">
                            <th style="color:#fff">SR.NO</th>
                            <th style="color:#fff">MEDICINE</th>
                            <th style="color:#fff">PUR PRICE</th>
                            <th style="color:#fff">SALE PRICE</th>
                            <th style="color:#fff">QUANTITY</th>
                            <th style="color:#fff">TOTAL</th>
                            <th style="color:#fff">PUR Date</th>
                            <th style="color:#fff">EXPIRY D</th>
                            <th style="color:#fff">DELETE</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sn=1;
                           $td=mysqli_query($con,"SELECT * FROM purchase WHERE user_id='".$_SESSION['muser']."'");
                          while($row=mysqli_fetch_row($td))
                      {
                        $med=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM medicine_info WHERE ID='".$row[1]."'"));
                          echo'<tr>
                            <td>'.$sn.'</td>
                            <td>'.$med[4].'</td>
                            <td>'.$row[2].'</td>
                            <td>'.$row[3].'</td>
                            <td>'.$row[4].'</td>
                            <td>'.$row[5].'</td>
                            <td>'.$row[6].'</td>
                            <td>'.$row[7].'</td>
                            
                             

                              <td><a href="delete_purchase.php?id='.$row[0].'"><button type="button " class="btn btn-social-icon  btn-danger"><i class="mdi mdi-window-close"></i></button></a></td>
                            
                          </tr>';
                          $sn++;
                        }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
                    
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
    
  </body>
</html>

