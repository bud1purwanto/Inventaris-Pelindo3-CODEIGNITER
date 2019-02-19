
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('index.php/dashboard'); ?>" class="nav-link">Dashboard</a>

      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="btn btn-default" href="<?php echo site_url('laporan') ?>" role="button"><img width="30px" height="30px" src="<?php echo base_url() ?>assets/img/print.ico">Cetak Laporan</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input  class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          
          <span class="badge badge-warning navbar-badge"><img width="25px" height="25px" src="<?php echo base_url('assets/');?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="<?php echo site_url('user/edit_profil/').$this->session->userdata('logged_in_admin')['id_user']?>" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> Change Profile
            <span class="float-right text-muted text-sm">Edit</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo site_url('dashboard/gantiPassword'); ?>" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> Change Password
            <span class="float-right text-muted text-sm">Edit</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo site_url('login/logout') ?>" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
    <!--   <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->
