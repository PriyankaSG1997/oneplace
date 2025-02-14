<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>One-Place</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url(); ?>public/assests/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url(); ?>public/assests/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?=base_url(); ?>public/assests/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url(); ?>public/assests/css/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="http://www.urbanui.com/" /> -->
  <link rel="icon" href="<?=base_url(); ?>public/assests/images/One-Place1.png" type="image/x-icon">

<style>
.small-dot {
  font-size: 8px !important; /* Adjust size to make the dot smaller */
  margin-right: 5px !important; /* Space between the dot and the text */
  vertical-align: middle !important; /* Align icon with text */
}

</style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="<?=base_url(); ?>public/assests/images/One-Place.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="<?=base_url(); ?>public/assests/images/One-Place1.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
         
    
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="fas fa-bell mx-0"></i>
              <span class="count">16</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 16 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-danger">
                    <i class="fas fa-exclamation-circle mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="fas fa-wrench mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="far fa-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
  
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="<?= base_url(); ?>public/assests/images/faces/face5.jpg" alt="profile"/>
                <span class="ml-2"><?= session()->get('username'); ?></span> <!-- Show Username -->
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <!-- <a class="dropdown-item">
                    <i class="fas fa-cog text-primary"></i> Settings
                </a> -->
                
                <a class="dropdown-item" 
                  href="<?= base_url(session()->get('role_type') == 'vendor' ? 'edit_profile/' . session()->get('vendor_id') : 'edit_user/' . session()->get('vendor_id')); ?>">
                    <i class="fas fa-cog text-primary"></i> 
                    Update Profile
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('logout'); ?>"> <!-- Corrected href -->
                    <i class="fas fa-power-off text-primary"></i> Logout
                </a>
            </div>
        </li>
  
        </ul>
      
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="<?=base_url(); ?>public/assests/images/faces/face5.jpg" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                <?= session()->get('username'); ?>
                              </p>
                <p class="designation">
<?= session()->get('role_type'); ?>                </p>
              </div>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?=base_url();?>dashboard">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          -->

          <li class="nav-item">
            <a class="nav-link" href="<?=base_url();?>billing">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Billing</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url();?>inventory">
              <i class="fa fa-table menu-icon"></i> <!-- User Icon -->
              <span class="menu-title">Update Stock / inventry</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?=base_url();?>vendor">
              <i class="fa fa-store menu-icon"></i> 
              <span class="menu-title">Vendor</span>
            </a>
          </li> -->

          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-vendor" aria-expanded="false" aria-controls="page-vendor">
            <i class="fa fa-user menu-icon"></i>              
            <span class="menu-title">Vendor</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-vendor">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>vendor">
                    <i class="fa fa-circle menu-icon small-dot"></i> 
                    Add vendor 
                  </a>
                </li>
                <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>vendorlist">
                    <i class="fa fa-circle menu-icon small-dot"></i> 
                    Vendor List
                  </a>
                </li>
        
               
              </ul>
            </div>
          </li> -->
      
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-master" aria-expanded="false" aria-controls="page-master">
              <i class="fa fa-cogs menu-icon"></i> <!-- Master Icon -->
              <span class="menu-title">Master</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-master">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>product">
                    <i class="fa fa-circle menu-icon small-dot"></i> <!-- Smaller Dot Icon -->
                   Add Product 
                  </a>
                </li>

                <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>productlist">
                    <i class="fa fa-circle menu-icon small-dot"></i> <!-- Smaller Dot Icon -->
                   Product List 
                  </a>
                </li>
                <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>productcategory">
                    <i class="fa fa-circle menu-icon small-dot"></i> <!-- Smaller Dot Icon -->
                    Add Product Category
                  </a>
                </li>
        

                <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>productcategorylist">
                    <i class="fa fa-circle menu-icon small-dot"></i> <!-- Smaller Dot Icon -->
                    Product Category List
                  </a>
                </li>


                <!-- <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>productsubcategory">
                    <i class="fa fa-circle menu-icon small-dot"></i> 
                    Add Product Sub Category
                  </a>
                </li>
        

                <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>productsubcategorylist">
                    <i class="fa fa-circle menu-icon small-dot"></i> 
                    Product Sub Category List
                  </a>
                </li> -->
        
                <!-- <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>menu">
                    <i class="fa fa-circle menu-icon small-dot"></i> 
                  </a>
                </li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url();?>reports">
              <i class="far fa-file-alt menu-icon"></i>
              <span class="menu-title">Reports</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-user" aria-expanded="false" aria-controls="page-user">
            <i class="fa fa-user menu-icon"></i> <!-- User Icon -->              
              <span class="menu-title">Staff</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-user">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>staff">
                    <i class="fa fa-circle menu-icon small-dot"></i> <!-- Smaller Dot Icon -->
                    Add Staff 
                  </a>
                </li>
                <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>stafflist">
                    <i class="fa fa-circle menu-icon small-dot"></i> <!-- Smaller Dot Icon -->
                    Staff List
                  </a>
                </li>
        
               
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-settings" aria-expanded="false" aria-controls="page-master">
              <i class="fa fa-cogs menu-icon"></i> <!-- Master Icon -->
              <span class="menu-title">Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-settings">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>offer ">
                    <i class="fa fa-circle menu-icon small-dot"></i> <!-- Smaller Dot Icon -->
                   Add offer 
                  </a>
                </li>

                <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>offerlist">
                    <i class="fa fa-circle menu-icon small-dot"></i> <!-- Smaller Dot Icon -->
                    offer  List 
                  </a>
                </li>

                <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="<?=base_url();?>vendorlist">
                    <i class="fa fa-circle menu-icon small-dot"></i> <!-- Smaller Dot Icon -->
                    Update Profile
                  </a>
                </li>
               
        
               
              </ul>
            </div>
          </li>
        </ul>
      </nav>