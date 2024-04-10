   <?php 
      $con=mysqli_connect("localhost","root","","medicine_drawer_db")or die("database error ...");
      $name1=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM registration WHERE ID='".$_SESSION['muser']."'"));
   ?>
  <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: lightblue">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/image.png" alt="logo" / style="height: 90px;width: 200px;"></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../admin/3_regi.png" <?php echo $name1[11]?>" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal" style="color:black;">HEALTH HUB</h5>
                  <span>Admin</span>
                </div>
              </div>
              
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-medium"></i>
              </span>
              <span class="menu-title" style="color:BLUE">Home</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-account-plus"></i>
              </span>
              <span class="menu-title" style="color:BLUE">COMPANY</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a style="color: green" class="nav-link" href="add_company.php">Add Company</a></li>
                <li class="nav-item"> <a style="color: green" class="nav-link" href="view_comany.php">View Company</a></li>
              </ul>
            </div>
          </li>



          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <span class="menu-icon">
                <i class="mdi mdi-buffer"></i>
              </span>
              <span class="menu-title" style="color:BLUE">CATAGORY</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" style="color: green" href="add_catagory.php">Add Catagory</a></li>
                <li class="nav-item"> <a class="nav-link" style="color: green" href="view_catagory.php">View Catagory</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic2">
              <span class="menu-icon">
                <i class="mdi mdi-emoticon-devil"></i>
              </span>
              <span class="menu-title" style="color:BLUE">DISEASE</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" style="color: green" href="add_disease.php">Add Disease</a></li>
                <li class="nav-item"> <a class="nav-link" style="color: green" href="view_disease.php">View Disease</a></li>
              </ul>
            </div>
          </li>

                      <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic2">
              <span class="menu-icon">
                <i class="mdi mdi-emoticon-devil"></i>
              </span>
              
              <span class="menu-title" style="color:BLUE">DRAWER</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" style="color: green" href="add_drawer.php">Add Drawer</a></li>
                <li class="nav-item"> <a class="nav-link" style="color: green" href="view_drawer.php">View Drawer</a></li>
              </ul>
            </div>
          </li>



          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic2">
              <span class="menu-icon">
                <i class="mdi mdi-bowl"></i>
              </span>
              <span class="menu-title" style="color:BLUE">MEDICINE</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" style="color: green" href="add_medicine.php">Add Medicine</a></li>
                <li class="nav-item"> <a class="nav-link" style="color: green" href="view_medi.php">View Medicine</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic2">
              <span class="menu-icon">
                <i class="mdi mdi-currency-inr"></i>
              </span>
              <span class="menu-title" style="color:BLUE">STOCK MANAGE</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" style="color: green" href="view_purchase.php">Purchase</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" style="color: green" href="view_purchase.php">View purchase</a></li> -->
                <li class="nav-item"> <a class="nav-link" style="color: green" href="view_sell.php">Sell</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" style="color: green" href="view_sell.php">View Sell</a></li> -->
              </ul>
            </div>
          </li>
          
          
        </ul>
      </nav>