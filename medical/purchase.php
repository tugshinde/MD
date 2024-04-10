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
    <script type="text/javascript">
      function addition() 
    { 
      var a=parseInt(document.getElementById("pprice").value);
      var b=parseInt(document.getElementById('quantity').value);
      var c=document.getElementById('tot').value=a*b;
    }
    </script>
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
      <div class="container-fluid">
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
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <div class="card" style="border-top: 4px solid red;border-radius: 10px;">
                  <div class="card-body">
                    <h4 class="card-title">Medicine</h4>
                    
                    <form class="forms-sample" action="purchase.php" method="POST">
                   
                      
                           <div class="row">
                             
                              <div class="col-md-4">
                                Medicine
                              <select class="form-control" name="medi" style="color:#fff">
                                <option>...Select Medicine...</option>
                                <?php 
                                   $td3=mysqli_query($con,"SELECT * FROM medicine_info WHERE user_id='".$_SESSION['muser']."'");
                                  while($row3=mysqli_fetch_row($td3))
                                  {
                                  echo"<option style='color:orange' value='".$row3[0]."'><b>$row3[4]</b></option>";
                                    }
                                ?>
                              </select>
                             </div>

                             <div class="col-md-4">
                              Purchase Price
                              <input type="number" class="form-control" placeholder="Purchase Price For 1 Qty" name="pprice" id="pprice">
                             </div>

                             <div class="col-md-4">
                              Sale Price
                              <input type="number" class="form-control" placeholder="Sale Price For 1 Qty" name="sprice">
                             </div>

                            </div>
                            
                            <br>
                             <div class="row">

                             <div class="col-md-3">
                              Quantity
                              <input type="number" class="form-control" placeholder="Quantity" name="qty" onkeyup="addition()" id="quantity">
                             </div>

                             <div class="col-md-3">
                              Total
                              <input style="background-color: #191c24;" type="number" readonly class="form-control" placeholder="Total" id="tot" name="tot">
                             </div>

                             <div class="col-md-3">
                              Purchase Date<input type="date" class="form-control" placeholder="Quantity" name="pdate">
                             </div>

                             <div class="col-md-3">
                              Total
                              Expiry date
                              <input type="date" class="form-control" placeholder="Total" name="edate">
                             </div>

                            
                           </div>

                           
                          
                         </div>
                         <hr>
                    
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
  $MEDI=$_POST['medi'];
  $PURCHASE=$_POST['pprice'];
  $SELLING=$_POST['sprice'];
  $QUANTITY=$_POST['qty'];
  $TOTAL=$_POST['tot'];
  $PDATE=$_POST['pdate'];
  $EDATE=$_POST['edate'];
if(mysqli_query($con,"INSERT INTO purchase VALUES('','".$MEDI."','".$PURCHASE."','".$SELLING."','".$QUANTITY."','".$TOTAL."','".$PDATE."','".$EDATE."','".$_SESSION['muser']."')"))
  {

    echo "
    <script>
    alert('PURCHASE Added Succesfully..');
    window.location.href='purchase.php';
    </script>
    ";
    }
  else
  {
    echo "
    <script>
    alert('Try Again');
    window.location.href='purchase.php';
    </script>
    ";
  }
}
?>