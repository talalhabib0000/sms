<div class="wrapper">
 <?php
 include("../includes/menu.php");
 ?>
  <!-- Navbar -->
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <!-- <img src="image/logo1.jpeg" alt="SMS Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">School Management System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="image/manager.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Teacher</a>
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
                <a href="teacher-page.php" class="nav-link ">
                 
                  <p>Dashboard </p>
                </a>
              </li>
            
          </li>
         

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Attendence Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
			     
              <li class="nav-item">
                <a href="view-attendance.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View attendence</p>
                </a>
              </li>
            </ul>
          </li>  
                      <!-- /.Numiar Pages -->      
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Communication managment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="jsgridd.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Parent</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="jsgridd.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Student</p>
                </a>
              </li>
            </ul>
          </li>

         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Exam Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Manage Exam</p>
                </a>
              </li>
			                <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Quiz</p>
                </a>
              </li>
              </ul>
          </li>
        </ul>
            
      </nav>
      <!-- /.sidebar-menu -->
    
    <!-- /.sidebar -->
  </aside>
     </div>