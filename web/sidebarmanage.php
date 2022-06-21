<div class="wrapper">
  <!-- Navbar -->
 <?php


 
 include("../includes/menu.php");
  

 ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <!-- <img src="image/sms.jpg" alt="SMS Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
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
          <a href="view-profile.php" class="d-block">ADMIN</a>
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
                <a href="manager.php" class="nav-link ">
                 
                  <p>Dashboard </p>
                </a>
              </li>
            
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
             Class Management
                <i class="fas fa-angle-left right"></i>
            
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="add-class.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Class</p>
                </a>
              </li>
			           
              <li class="nav-item">
                <a href="product-add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add Subjects</p>
                </a>
              </li>
             

            </ul>
          </li>

 
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
             Communication Management
                <i class="fas fa-angle-left right"></i>
            
              </p>
            </a>
            <ul class="nav nav-treeview">


              <li class="nav-item">
                <a href="admin-contact.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Send Messages</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="manage-salary.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Salary</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewcomplainsadmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Complains</p>
                </a>
              </li>
            </ul>
          </li>

         
     
  
                 <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-users"></i>
              <p>
                Users Managnment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="View Users.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View User</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="view-role.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Role</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="suspend-user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suspend User</p>
                </a>
              </li>
			    
            </ul>
          </li>
		     
                 
 
                      <!-- /.Numiar Pages -->      
          
         
        </ul>
            
      </nav>
      <!-- /.sidebar-menu -->
    
    <!-- /.sidebar -->
  </aside>
  </div>