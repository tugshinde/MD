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
    <title>VIRTUAL PHARMACY</title>
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
      $row=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM sell_details WHERE ID='".$_GET['id']."'"));
      $row1=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM medicine_info WHERE ID='".$_GET['id']."'"));
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
            <h1 style="text-align:center;margin-left: 310px;">Medicine Bill</h1>
            <div class="row">
  <div style="height: 400px;width: 500px;border: blue solid;margin-left: 380px;">
      <div style="height:122px;width:400px;border:lightblue solid;margin-left: 40px;margin-top: 10px;">

        <table border="1" cellspacing="0" cellpadding="5" style="border: lightblue solid;">
      <tr>
        <td style="height:10px;width:270px">Customers Order No: <?php echo $row[0]?></td>
        <td style="height:10px;width:90px">Date: <?php echo $row[8]?></td>
      </tr>
      <tr>
        <td style="width:500px;color: yellow" colspan="2">Name : <?php echo $row[9]?></td>
      </tr>
      </div>

      <table border="1" cellspacing="0" cellpadding="5" style="border: lightblue solid;">
        <br>
        
      </table>
      <br>
      <div style="height:100px;width:395px;">

        Medicine ID: <?php echo $row[1]?>;<br>
        Medicine Ex: <?php echo $row[5]?>;<br>
        Qty: <?php echo $row[6]?>;
      </div>
      <h3 style="text-align: center;color: blue;">KEEP THIS SLIP FOR REFRENCE</h3>
  </div>


</table>
            </div>
            <br>
             
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

