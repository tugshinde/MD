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
    <link rel="shortcut icon" />
  </head>
  <body>
    <?php 
      $con=mysqli_connect("localhost","root","","medicine_drawer_db")or die("database error ...");
    // $row=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM sell_details WHERE ID='".$_GET['id']."'"));

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
                    <a href="sell.php">
                      <button type="button" class="btn btn-social-icon-text btn-youtube"><i class="mdi mdi-arrow-top-right"></i>Add New Sell</button>
                    </a>
              </div>
            </div>
            <br>
             <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sell Details</h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr style="background-color:#8f5fe8;color: #fff;">
                            <th style="color:#fff">SR.NO</th>
                            <th style="color:#fff">Medicine</th>
                            <th style="color:#fff">Company</th>
                            <th style="color:#fff">Catagory</th>
                            <th style="color:#fff">Price</th>
                            <th style="color:#fff">Expiry</th>
                            <th style="color:#fff">Quantity</th>
                            <th style="color:#fff">Total</th>
                            <th style="color:#fff">Date</th>
                            <th style="color:#fff">Name</th>
                            <th style="color:#fff">Bill</th>
                            <th style="color:#fff">DELETE</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          // $sn = 1;
                          // while ($row = mysqli_fetch_assoc($td)) {
                          //     var_dump($row); // Add this line for debugging
                          
                          //     $mname = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM medicine_info WHERE ID='" . $row['medicine'] . "'"));
                          //     $cname = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM brand_name WHERE ID='" . $row['company'] . "'"));
                          //     $catname = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM catagory_name WHERE ID='" . $row['catagory'] . "'"));
                          
                          //     echo '<tr>
                          //             <td>' . $sn . '</td>
                          //             <td>' . $mname['medicine'] . '</td>
                          //             <td>' . ($cname ? $cname['name'] : 'N/A') . '</td>
                          //             <td>' . ($catname ? $catname['name'] : 'N/A') . '</td>
                          //             <td>' . $row['price'] . '</td>
                          //             <td>' . $row['expiry'] . '</td>
                          //             <td>' . $row['quantity'] . '</td>
                          //             <td>' . $row['total'] . '</td>
                          //             <td>' . $row['date'] . '</td>
                          //             <td>' . $row['name'] . '</td>
                          //             <td><a href="bill.php?id=' . $row['ID'] . '"><button type="button " class="btn btn-social-icon  btn-success"><i class="mdi mdi-lead-pencil"></i></button></a></td>
                          //             <td><a href="delete_sell.php?id=' . $row['ID'] . '"><button type="button " class="btn btn-social-icon  btn-danger"><i class="mdi mdi-window-close"></i></button></a></td>
                          //           </tr>';
                          //     $sn++;
                          // }
                          
                          $sn=1;
                           $td=mysqli_query($con,"SELECT * FROM sell_details WHERE user_id='".$_SESSION['muser']."'");
                          while($row=mysqli_fetch_row($td))
                      {
                        $mname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM medicine_info WHERE ID='".$row[1]."'"));

                        $cname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM brand_name WHERE ID='".$row[2]."'"));

                        $catname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM catagory_name WHERE ID='".$row[3]."'"));

                        


                          echo'<tr>
                            <td>'.$sn.'</td>
                            <td>'.$mname[4].'</td>
                            <td>'.$cname[1].'</td>
                            <td>'.$catname[1].'</td>
                            <td>'.$row[4].'</td>
                            <td>'.$row[5].'</td>
                            <td>'.$row[6].'</td>
                            <td>'.$row[7].'</td>
                             <td>'.$row[8].'</td>
                             <td>'.$row[9].'</td>

                              
                               
                            
                             <td><a href="bill.php?id='.$row[0].'"><button type="button " class="btn btn-social-icon  btn-success"><i class="mdi mdi-lead-pencil"></i></button></a></td>

                              <td><a href="delete_sell.php?id='.$row[0].'"><button type="button " class="btn btn-social-icon  btn-danger"><i class="mdi mdi-window-close"></i></button></a></td>
                            
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

