<div class="wrapper">
 <?php
 include("../includes/menu.php");
 ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <!-- <img src="image/.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: "> -->
      <span class="brand-text font-weight-light">School Management System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="image/dist.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Parent</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->


        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

              <li class="nav-item">
                <a href="parent.php" class="nav-link ">
                 
                  <p>Dashboard</p> <br>

                 
                </a>
              </li>
          
          <!--mudassar pages link -->
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
      
          
                 <a href="parent-contact.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Faculty</p>
                </a>
              </li>
               <li class="nav-item"> 
               <!--  <a href="placeorder.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Place Order</p>
                </a> -->

              </li>

              <li class="nav-item"> 
                <a href="child-grade.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Children Grade</p>
                </a>
              </li>

              <li class="nav-item"> 
                <a href="attendance-parent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Attendance</p>
                </a>
              </li>
              
            </ul>
          </li>

   
                      <!-- /.Numiar Pages -->      
          

             
            </ul>
          </li>
           <!--mudassar pages link -->

            
           

        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</div>