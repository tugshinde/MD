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
      

    function get_medicine_data(val)
    {
      $.ajax({
             type: "POST",
             url: 'med_ajax.php',
             data: {pur_id: val},
             success: function(data)
             {
             // document.getElementById('pid2').value=data;
             $('#med_info').html(data);
             }
            });
    }
    function price_sel() 
    { 
      var a=parseInt(document.getElementById('price').value);
      var b=parseInt(document.getElementById('quantity').value);
      var c=document.getElementById('tot').value=a*b;
    }

    function price_sel2() 
    { 
      var b=parseInt(document.getElementById('quantity').value=" ");
      var c=document.getElementById('tot').value=" ";
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
    <link rel="shortcut icon" />
    
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
                    <h4 class="card-title">Sell Medicine</h4>
                    
                    <form class="forms-sample" action="sell.php" method="POST">
                   
                      
                           <div class="row">
                             
                              <div class="col-md-4">
                                Medicine
                              <select class="form-control" name="medi" style="color:#fff" onchange="get_medicine_data(this.value),price_sel2()">
                                <option>...Select Medicine...</option>
                                <?php 
                                   $td3=mysqli_query($con,"SELECT * FROM purchase WHERE user_id='".$_SESSION['muser']."'");
                                  while($row3=mysqli_fetch_row($td3))
                                  {
                                  $med=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM medicine_info WHERE ID='".$row3[1]."'"));

                                  echo"
                                  <option value='".$med[0]."' style='color:orange'>
                                  <b >$med[4]</b> &nbsp; -
                                  </option>";
                                    }
                                ?>
                              </select>
                             </div>


                             

                             <div class="col-md-1"></div>
                             <div class="col-md-4" id="med_info">
                              
                             </div>

                             <div class="col-md-3">
                                      <input type="number" class="form-control" placeholder="Quantity" name="qty" id="quantity" onkeyup="price_sel()">
                                      <br>
                                      <input type="text" readonly style="background-color: #191c24;" class="form-control" placeholder="Total" name="tot" id="tot">
                                      <br>
                                      <input type="date"  style="background-color: #191c24;" class="form-control"  name="sdate" id="">
                                      <br>
                                      <input type="text"  style="background-color: #191c24;" class="form-control"  name="cname" id="" placeholder="Name">

                                      <br>
                                      <button type="submit" class="btn btn-social-icon-text btn-facebook" value="save" name="ssave"><i class="mdi mdi-arrow-top-right"></i>&nbsp; Sale &nbsp;&nbsp</button>
                                      <button style="margin-top:20px" type="reset" class="btn btn-social-icon-text btn-youtube"><i class="mdi mdi-arrow-top-right"></i>Cancel</button>

                             </div>

                            
                           </div>

                           
                          
                         </div>
                         <hr>
                    
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
if(isset($_POST['ssave']))
{
  $MEDI=$_POST['medi'];
  $COMID=$_POST['cid'];
  $CATAGORY=$_POST['cat'];
  $PRICE=$_POST['price'];
  $EDATE=$_POST['edate'];
  $QUNTITY=$_POST['qty'];
  $TOTAL=$_POST['tot'];
  $DATE=$_POST['sdate'];
  $NAME=$_POST['cname'];
  $stmt = mysqli_prepare($con, "INSERT INTO sell_details VALUES(NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($stmt, "iiidsdssss", $MEDI, $COMID, $CATAGORY, $PRICE, $EDATE, $QUNTITY, $TOTAL, $DATE, $NAME, $_SESSION['muser']);

  if(mysqli_stmt_execute($stmt))
  {
    echo "
    <script>
    alert('Selling Details Added....!');
    window.location.href='sell.php';
    </script>
    ";
  }
  else
  {
    echo "
    <script>
    alert('Try Again');
    window.location.href='sell.php';
    </script>
    ";
  }

  mysqli_stmt_close($stmt);
// if(mysqli_query($con,"INSERT INTO sell_details VALUES('','".$MEDI."','".$COMID."','".$CATAGORY."','".$PRICE."','".$EDATE."','".$QUNTITY."','".$TOTAL."','".$DATE."','".$NAME."','".$_SESSION['muser']."')"))
//   {

//     echo "
//     <script>
//     alert('Selling Details Added....!');
//     window.location.href='sell.php';
//     </script>
//     ";
//     }
//   else
//   {
//     echo "
//     <script>
//     alert('Try Again');
//     window.location.href='sell.php';
//     </script>
//     ";
//   }
}
?>