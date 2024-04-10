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
    endinject
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
           
             <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card" style="border-top: 4px solid blue;border-radius: 10px;">
                  <div class="card-body">
                    <h4 class="card-title">REGISTRATION</h4>
                    
                    <form class="forms-sample" action="regi.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
                            <b style="color: orange;">Medical Information</b>
                          </div>
                        </div>
                        <hr style="background-color: blue;">
                         <div class="row">
                           <div class="col-md-6">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="MEDICAL NAME" name="mname">
                           </div>

                           <div class="col-md-6">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="Email" name="email">
                           </div>
                         </div>
                         <br>
                         <div class="row">
                           <div class="col-md-6">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="Payment" name="fees">
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
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="owner name" name="oname">
                           </div>

                           <div class="col-md-4">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="Owner Mobile" name="mob">
                           </div>

                           <div class="col-md-4">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="Owner Email" name="oemail">
                           </div>
                         </div>
                         <br>

                         <div class="row">
                           <div class="col-md-4">
                              <textarea class="form-control" placeholder="Address" name="add"></textarea>
                           </div>

                           <div class="col-md-4">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="Adhar" name="adhar">
                           </div>

                            <div class="col-md-4">
                              <input type="file" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="Image" name="Photo">
                           </div> 
                         </div>

                         <br>

                         <div class="row">
                          <div class="col-md-1">
                          </div>
                           <div class="col-md-4">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="Username" name="user">
                           </div>
                           <div class="col-md-1">
                           </div>

                           <div class="col-md-4">
                              <input type="text" style="color:orange;font-weight: bold;" class="form-control" id="exampleInputUsername1" placeholder="password" name="pass">
                           </div>

                            
                         </div>

                         <br>

                         


                      </div>   
                        <!-- 
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
                     -->
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

  $max1=mysqli_query($con,"SELECT MAX(ID) FROM registration");
  $max=mysqli_fetch_row($max1);
      if($max[0])
      {
        $max=$max[0];
        $max_id=$max+1;
      }
      else 
      {
       $max_id=1;
       }    


  $file_exists=array("jpg","jpeg","png","gif","bmp","pdf");//file extenssions supported for upload 

        
        $upload_exists = end (explode('.', $_FILES["Photo"]["name"]));//find extension of file 
        if(($upload_exists==null )||($upload_exists==""))//file is none or of 0kb
        {
            
            echo"<script>alert('File Not Select Or uncompatible file'); </script>";
        }
        else
        {
            if((($_FILES['Photo']['size']<2000000) || in_array($upload_exists,$file_exists)))//file size & file extension support
            {
             $newname="$max_id"."_regi.png"; 
          $targetfile='upload/'.$newname;//location of folder with target file name 

                if($_FILES['Photo']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');</script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['Photo']['tmp_name'],$targetfile);//end img code


if(mysqli_query($con,"INSERT INTO registration VALUES('','".$MNAME."','".$EMAIL."','".$FEES."','".$ONAME."','".$OMOBILE."','".$OEMAIL."','".$ADDRESS."','".$ADHAR."','".$USERNAME."','".$PASSWORD."','".$targetfile."')"))
  {

    echo "
    <script>
    alert('info Added');
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
}
}
}
?>