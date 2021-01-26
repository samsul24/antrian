<?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>

<style>
    nav-treeview:hover{
        color : #28a745;
    }
</style>

<body class="hold-transition sidebar-mini" >
<div class="wrapper" style="position:relative;">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-success" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url(); ?>adminclient" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-green elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url(); ?>adminclient" class="brand-link">
      <img src="<?=base_url();?>css/assets/img/logo-kecil.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Kementrian Agama</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          <li class="nav-item ">
           <a href="<?php echo site_url(); ?>adminclient" class="nav-link" id="navHome">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link" id="navData">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Rekap Antrian
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>laporanclient" class="nav-link">
                <i class="fas fa-book"></i>
                  <p>Laporan</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>logclient" class="nav-link">
                  <i class="fas fa-history"></i>
                  <p>Log</p>
                </a>
              </li>
            </ul>
            

          <li class="nav-item">
           <a href="<?php echo site_url(); ?>userclient" class="nav-link" id="navHome">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>

          <li class="nav-item">
           <a href="<?php echo site_url(); ?>roleuserclient" class="nav-link" id="navHome">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                User Role
              </p>
            </a>
          </li>

          <li class="nav-item">
           <a href="<?php echo site_url(); ?>layananclient" class="nav-link" id="navHome">
              <i class="nav-icon fas fa-tablet"></i>
              <p>
                Layanan
              </p>
            </a>
          </li>

          <li class="nav-item">
           <a href="<?php echo site_url(); ?>loketclient" class="nav-link" id="navHome">
              <i class="nav-icon fas fa-microphone"></i>
              <p>
                Loket
              </p>
            </a>
          </li>

          
          <li class="nav-item" style="background:#28a745;">
           <a href="<?= base_url().'login/out' ?>" onClick="return confirm('Logout sekarang ??');" class="nav-link" id="navHome">
              <i class="nav-icon fas fa-sign-out-alt" style=color:white;></i>
              <p style="color:white;">
                Logout
              </p>
            </a>
          </li>

         
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>