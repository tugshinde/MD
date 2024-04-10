<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if(isset($_SESSION['admin']))
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
    <title>VIRTUAL PHARMACY</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../medical/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../medical/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../medical/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../medical/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../medical/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../medical/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../medical/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../medical/assets/images/favicon.png" />
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
             <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">REGISTRATION</h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr style="background-color:#8f5fe8;color: #fff;">
                            <th style="color:#fff">SR.NO</th>
                            <th style="color:#fff">Image</th>
                            <th style="color:#fff">MEDICAL NAME</th>
                            <th style="color:#fff">EMAIL</th>
                            <th style="color:#fff">PAYMENT</th>
                            <th style="color:#fff">OWNER NAME</th>
                            <th style="color:#fff">OWNER MOBIE</th>
                            <th style="color:#fff">OWNER EMAIL</th>
                            <th style="color:#fff">ADRESSES</th>
                            <th style="color:#fff">ADHAR</th>       
                            <th style="color:#fff">USERNAME</th>      
                            <th style="color:#fff">PASSWORD</th>
                            <th style="color:#fff">UPDATE</th>  
                            <th style="color:#fff">DELETE</th>                             
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                           $td=mysqli_query($con,"SELECT * FROM registration");
                          while($row=mysqli_fetch_row($td))
                      {
                          echo'<tr>
                        
                            <td>'.$row[0].'</td>
                            <td>
                              <img src="'.$row[11].'" style="height:100px; width:100px;border-radius:0px">
                            </td>
                            <td>'.$row[1].'</td>
                            <td>'.$row[2].'</td>
                            <td>'.$row[3].'</td>
                            <td>'.$row[4].'</td>
                            <td>'.$row[5].'</td>
                            <td>'.$row[6].'</td>
                            <td>'.$row[7].'</td>
                            <td>'.$row[8].'</td>
                            <td>'.$row[9].'</td>
                            <td>'.$row[10].'</td>
      
                             <td><a href="update_regi.php?id='.$row[0].'"><button type="button " class="btn btn-social-icon  btn-primary"><i class="mdi mdi-lead-pencil"></i></button></a></td>

                              <td><a href="delete_regi.php?id='.$row[0].'"><button type="button " class="btn btn-social-icon  btn-danger"><i class="mdi mdi-window-close"></i></button></a></td>
                            
                          </tr>';
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

