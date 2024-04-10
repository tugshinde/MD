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
$con=mysqli_connect("localhost","root","","medicine_drawer_db")or die("database error ...");

$med_id=$_POST['med_id'];
$res=mysqli_query($con,"SELECT * FROM medicine_setup WHERE MEDI_ID='".$med_id."'");
$row=mysqli_fetch_row($res);
$did=$row[2];

 $dname1=mysqli_query($con,"SELECT * FROM drawer WHERE user_id='".$_SESSION['muser']."'");
          $dnum=mysqli_num_rows($dname1);
      while($dname=mysqli_fetch_row($dname1))
      {
        if($dname[0]==$did)
        {
        	$sum2=mysqli_query($con,"SELECT * FROM medicine_setup WHERE DRAWER_ID='".$dname[0]."'");
                $sum=mysqli_num_rows($sum2);



              echo'<div class="col-xl-3 col-sm-6 grid-margin stretch-card"  >
                <div class="card">
                  <div class="card-body" style="box-shadow: 5px 5px 5px 5px yellow">
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
        else
        {
        	$sum2=mysqli_query($con,"SELECT * FROM medicine_setup WHERE DRAWER_ID='".$dname[0]."'");
                $sum=mysqli_num_rows($sum2);



              echo'<div class="col-xl-3 col-sm-6 grid-margin stretch-card"  >
                <div class="card">
                  <div class="card-body">
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
      }



?>