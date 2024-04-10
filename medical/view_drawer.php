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
    <script type="text/javascript">
      function find_medicine(val)
      {


        $.ajax({
             type: "POST",
             url: 'med_find_ajax.php',
             data: {med_id: val},
             success: function(data)
             {

             // var dr_no=data;
             
             // document.getElementById('dr'+dr_no).style.boxShadow = "5px 5px 5px 5px yellow";
             $('#a1').html(data);
             
             }

            });

      }
    </script>
    
  </head>
  <body id="aa">
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
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-4 col-xl-4 p-0">
                        <h4 class="mb-1 mb-sm-0">Find Medicine.....!</h4>
                        <select class="form-control" style="color:#fff;font-weight: bold;" onchange="find_medicine(this.value)">
                          <option>Find Medicine</option>
                           <?php
                          $td=mysqli_query($con,"SELECT * FROM medicine_info WHERE user_id='".$_SESSION['muser']."'");
                          while($row=mysqli_fetch_row($td))
                                {
                                    echo "<option value='$row[0]'>$row[4]</option>";
                                }
                                ?>
                      
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" id="a1">

              <?php
              $dname1=mysqli_query($con,"SELECT * FROM drawer WHERE user_id='".$_SESSION['muser']."'");
              $dnum=mysqli_num_rows($dname1);
              while($dname=mysqli_fetch_row($dname1))
              {
                $sum2=mysqli_query($con,"SELECT * FROM medicine_setup WHERE DRAWER_ID='".$dname[0]."'");
                $sum=mysqli_num_rows($sum2);



              echo'<div class="col-xl-3 col-sm-6 grid-margin stretch-card"  >
                <div class="card">
                  <div class="card-body" id="dr'.$dname[0].'" name="ss">
                    <div class="row">
                      <div class="col-9">

                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0" >D'.$dname[1].'</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">[&nbsp;'.$sum.' Types &nbsp;]</p>
                        </div>
                      </div>

                      <div class="col-3">
                        <div class="icon icon-box-success ">
                           <span data-toggle="modal" data-target="#myModal2'.$dname[0].'" class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>

                      <div class="col-9"></div>
                      <div class="col-3">

                        <div class="icon icon-box-danger ">
                           <span a href="delete_drawer2.php?id='.$dname[0].'"" class="mdi mdi-window-close icon-item"></span>
                        </div>
                      </div>

                    </div>
                    <button data-toggle="modal" data-target="#myModal'.$dname[0].'" class="btn btn-info btn-xs" >Add More Medicine</button>
                  </div>
                </div>
              </div>


                        <div class="modal fade" id="myModal2'.$dname[0].'" role="dialog" >
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color:orange;">
                    <b>Add Medicine In Drawer...!</b>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <div class="row">';
                        while($mname2=mysqli_fetch_row($sum2))
                        {
                          // echo $mname2[1];
                          $mn=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM medicine_info WHERE ID='".$mname2[1]."'"));

                          echo"
                          <div class='col-sm-2'></div>
                          <div class='col-sm-10' style='margin-top:10px;font-size:20px;color:yellow'>
                            <b >$mn[4]</b>
                              <div style='width:auto;height:1px;background-color:pink'></div>

                          </div>
                          ";

                        }
                        echo'</div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

                <div class="modal fade" id="myModal'.$dname[0].'" role="dialog" >
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color:orange;">
                    <b>Add Medicine In Drawer...!</b>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">


                    <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card" style="border-top: 4px solid red;border-radius: 10px;">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="view_drawer.php" method="POST">
                   
                      <div class="form-group">
                        <label for="exampleInputUsername1">Medicine</label>
                        <input type="hidden" value="'.$dname[0].'" name="did">
                        <input type="hidden" value="'.$dname[1].'" name="dn">
                       <select class="form-control" name="mid" style="color:#fff" >
                       <option>Select Medicine</option>';
                       $med1=mysqli_query($con,"SELECT * FROM medicine_info WHERE user_id='".$_SESSION['muser']."'");
                       while($med=mysqli_fetch_row($med1))
                       {
                        $fx1=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM medicine_info WHERE ID='".$med[0]."' && status='fixed'"));
                        if($fx1[0])
                        {
                        echo'<option style="color:red" value="'.$med[0].'">'.$med[4].'</option>';

                        }
                        else
                        {
                        echo'<option style="color:#fff" value="'.$med[0].'">'.$med[4].'</option>';
                        

                        }

                       }
                       echo'</select>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" value="save" name="csave">Submit</button>
                   <button type="reset" class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

              ';
              }

              ?>
              
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

<?php 
if(isset($_POST['csave']))
{

  $MEDID=$_POST['mid'];
  $DID=$_POST['did'];
  $fixed1=mysqli_query($con,"SELECT * FROM medicine_setup WHERE MEDI_ID='".$MEDID."'");
  $fixed=mysqli_fetch_row($fixed1);
  if(mysqli_num_rows($fixed1)>0)
  {
  $dr1=mysqli_query($con,"SELECT * FROM drawer WHERE ID='".$fixed[2]."'");
  $dr=mysqli_fetch_row($dr1);

    echo "
        <script>
        alert('This Medicine Already Set in ".$dr[1]."');
        window.location.href='view_drawer.php';
        </script>
        ";
  }
  else
  {

    if(mysqli_query($con,"INSERT INTO medicine_setup VALUES('','".$MEDID."','".$DID."')"))
      {

          if(mysqli_query($con,"UPDATE medicine_info SET status='fixed' WHERE ID='".$MEDID."'"))
          {
            echo "
          <script>
          alert('Medicine Drawer  Fixed');
          window.location.href='view_drawer.php';
          </script>
          ";
          }
        }
      else
      {
        echo "
        <script>
        alert('Try Again');
        window.location.href='view_drawer.php';
        </script>
        ";
      }
    }
  }
?>