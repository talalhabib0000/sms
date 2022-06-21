<div class="wrapper">
 <?php
 include("../includes/menu.php");
 ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <!-- <img src="school\image\sms.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: "> -->
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
          <a href="#" class="d-block">Student</a>
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
                <a href="student.php" class="nav-link ">
                 
                  <p>Dashboard</p>
                </a>
              </li>
          
          <!--mudassar pages link -->
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Student Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="add-orderr.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Order</p>
                </a>
              </li> -->
               <li class="nav-item">
                <a href="contact-teacher.php" class="nav-link">  <!-- orderplaceshop.php -->
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Teacher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="contact-teacher.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="complaint-student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Complain</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fee Receipt</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Check Exam</p>
                </a>
              </li>

             
               <!-- <li class="nav-item">
                <a href="retuurn orderr.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Return Order</p>
                </a>
              </li> -->
            </ul>
          </li>

   
                      <!-- /.Numiar Pages -->      
         <!--  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="simpleeee.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report Order</p>
                </a>
              </li>
            </ul>
          </li> -->

        

           <!--mudassar pages link -->
            
           <!--mudassar pages link -->

            
           

        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</div>