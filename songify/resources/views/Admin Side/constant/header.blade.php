<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- @stack('title') --}}
  <title>SOL Music Admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}>
  <!-- Ionicons -->
  <link rel="stylesheet" href={{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}>
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href={{asset('Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}>
  <!-- iCheck -->
  <link rel="stylesheet" href={{asset('Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}>
  <!-- JQVMap -->
  <link rel="stylesheet" href={{asset('Admin/plugins/jqvmap/jqvmap.min.css')}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset('Admin/dist/css/adminlte.min.css')}}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{asset('Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}>
  <!-- Daterange picker -->
  <link rel="stylesheet" href={{asset('Admin/plugins/daterangepicker/daterangepicker.css')}}>
  <!-- summernote -->
  <link rel="stylesheet" href={{asset('Admin/plugins/summernote/summernote-bs4.min.css')}}>
  <link rel="stylesheet" href={{asset('Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}>
  <link rel="stylesheet" href={{asset('Admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}>
  <link rel="stylesheet" href={{asset('Admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}>
  <link href="img/favicon.ico" rel="shortcut icon"/>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    {{-- <img class="animation__shake" src="Admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> --}}
    <img class="animation__shake" src="Client/img/logo.png" alt="Songify">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/adminPage" class="nav-link">Home</a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-user"></i>
        </a>
      </li> --}}
      <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        @if(session()->has('id'))
            <div class="d-flex align-items-center">
                <i class="fas fa-user"></i>
                <span class="ml-1">{{ session()->get('name') }}</span>
            </div>
        @endif
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <a href="/adminlogout" class="dropdown-item">Logout</a>
    </div>
</li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/adminPage" class="brand-link">
      <img src="Client/img/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
      <br>
      {{-- <span class="brand-text font-weight-light">SOL Music</span> --}}
    </a>

    <div class="sidebar">
      
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
          <li class="nav-item menu-open">
            <a href="/adminPage" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/user" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p> User </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/adminartist" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
              </svg>&nbsp;&nbsp;&nbsp;
              <p>
                Artist
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/adminartist" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Artists list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/add/artist" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Artist</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/song" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
                <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13s1.12-2 2.5-2 2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2"/>
                <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z"/>
                <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z"/>
              </svg></i>&nbsp;&nbsp;&nbsp;
              <p>
                Songs
                
                <i class="right fas fa-angle-left"></i>
              </p>

            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/adminSong" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Song List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Song</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="/edit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Song</p>
                </a>
              </li> --}}
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="/feedbackdata" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Feedbacks Data
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>