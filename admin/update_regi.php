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
      $cname2=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM  registration WHERE ID='".$_GET['id']."'"));
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
           
             <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card" style="border-top: 4px solid blue;border-radius: 10px;">
                  <div class="card-body">
                    <h4 class="card-title">REGISTRATION</h4>
                    
                    <form class="forms-sample" action="update_regi.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
                            <b style="color: orange;">Medical Information</b>
                          </div>
                        </div>
                        <hr style="background-color: blue;">
                         <div class="row">
                           <div class="col-md-6">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="MEDICAL NAME" value="<?php echo $cname2[1]?>" name="mname">
                           </div>

                           <div class="col-md-6">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="Email" value="<?php echo $cname2[2]?>" name="email">
                           </div>
                         </div>
                         <br>
                         <div class="row">
                           <div class="col-md-6">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" value="<?php echo $cname2[3]?>" placeholder="Payment" name="fees">
                           </div>

                           <div class="col-md-6">
                              
                           </div>
                         </div>
                         

                          <div class="row">
                          <div class="col-md-12">
                            <b style="color: orange;">Owner Information</b>
                          </div>
                        </div>
                        <hr style="background-color: blue;">


                         <div class="row">
                           <div class="col-md-4">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="owner name" value="<?php echo $cname2[4]?>" name="oname">
                           </div>

                           <div class="col-md-4">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" value="<?php echo $cname2[5]?>" placeholder="Owner Mobile" name="mob">
                           </div>

                           <div class="col-md-4">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" value="<?php echo $cname2[6]?>" placeholder="Owner Email" name="oemail">
                           </div>
                         </div>
                         <br>

                         <div class="row">
                           <div class="col-md-4">
                              <textarea class="form-control" placeholder="Address"  name="add">
                                <?php echo $cname2[7]?>
                              </textarea>
                           </div>

                           <div class="col-md-4">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" value="<?php echo $cname2[8]?>" placeholder="Adhar" name="adhar">
                           </div>

                           <!-- <div class="col-md-4">
                              <input type="file" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="Image" name="Photo">
                           </div> -->
                         </div>

                         <br>

                         <div class="row">
                          <div class="col-md-1">
                          </div>
                           <div class="col-md-4">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" value="<?php echo $cname2[9]?>" placeholder="Username" name="user">
                           </div>
                           <div class="col-md-1">
                           </div>

                           <div class="col-md-4">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" value="<?php echo $cname2[10]?>" placeholder="password" name="pass">
                           </div>

                            
                         </div>

                         <br>

                         


                      </div>   
                        
                        <label for="exampleInputUsername1"> MEDICAL ADRESSES</label>
                        <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" name="">
                        <br>
                        <label for="exampleInputUsername1"> MEDICAL EMAIL</label>
                        <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" name="">
                        <br>
                        <label for="exampleInputUsername1">OWNER NAME</label>
                        <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" name="cname">
                        <br>
                        <label for="exampleInputUsername1"> OWNER ADRESSES</label>
                        <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" name="cname">
                        <br>
                        <label for="exampleInputUsername1"> OWNER EMAIL</label>
                        <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" name="cname">
                        <br>
                        <label for="exampleInputUsername1">OWNER CONTACT</label>
                        <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" name="cname">
                        <br>
                        <label for="exampleInputUsername1">ADHAR NO</label>
                        <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" name="cname">
                        <br>
                        <label for="exampleInputUsername1">OWNER IMAGE</label>
                        <input type="file" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" name="cname">
                        <br>
                        <label for="exampleInputUsername1">USERNAME</label>
                        <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" name="cname">
                        <br>
                        <label for="exampleInputUsername1">PASSWORD</label>
                        <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" name="cname">
                      </div>
                     
                     <input type="hidden" name="id2" value="<?php echo $cname2[0]?>">
                      <button type="submit" class="btn btn-primary mr-2"  name="csave">Update</button>
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
    <script src="../medical/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../medical/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../medical/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../medical/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../medical/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../medical/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../medical/assets/js/off-canvas.js"></script>
    <script src="../medical/assets/js/hoverable-collapse.js"></script>
    <script src="../medical/assets/js/misc.js"></script>
    <script src="../medical/assets/js/settings.js"></script>
    <script src="../medical/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../medical/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    
  </body>
</html>

<?php 
if(isset($_POST['csave']))
{
  $MNAME=$_POST['mname'];
  $EMAIL=$_POST['email'];
  $FEES=$_POST['fees'];
  $ONAME=$_POST['oname'];
  $OMOBILE=$_POST['mob'];
  $OEMAIL=$_POST['oemail'];
  $ADDRESS=$_POST['add'];
  $ADHAR=$_POST['adhar'];
  $USERNAME=$_POST['user'];
  $PASSWORD=$_POST['pass'];
  $id=$_POST['id2'];

  
  if(mysqli_query($con,"UPDATE registration SET MEDICAL NAME='".$MNAME."', EMAIL='".$EMAIL."',FEES='".$FEES."',OWNER NAME='".$ONAME."',OWNER MOBILE='".$OMOBILE."',OWNER EMAIL='".$OEMAIL."',ADRESSES='".$ADDRESS."',ADHAR='".$ADHAR."',USERNAME='".$USERNAME."',PASSWORD='".$PASSWORD."',WHERE ID='".$id."'"))
  {

    echo "
    <script>
    alert('Info Updated');
    window.location.href='regi.php';
    </script>
    ";
    }
  else
  {
    echo "
    <script>
    alert('Try Again');
    window.location.href='regi.php';
    </script>
    ";
  }

}

?>