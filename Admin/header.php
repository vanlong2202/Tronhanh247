<?php
session_start();
// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['loggedin'])) {
  // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
  header("Location: ../login.php");
  exit();
} else {
  // Nếu đã đăng nhập, kiểm tra level
  if($_SESSION['level'] != 2) {
    header("Location: ../login.php"); // Chuyển hướng nếu level không phải 2
    exit();
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Trang Quản Trị TroNhanh247</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme">
  </head>
  <body class="vertical  dark  ">
    <div class="wrapper">
      <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <!-- <form class="form-inline mr-auto searchform text-muted">
          <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
        </form> -->
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
              <span class="fe fe-grid fe-16"></span>
            </a>
          </li>
          <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
              <span class="fe fe-bell fe-16"></span>
              <span class="dot dot-md bg-success"></span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Activities</a>
            </div>
          </li>
        </ul>
      </nav>
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="mx-auto center-block w-100 mb-2 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="../index.php">
              <img id="logo" class="w-100 mb-4 d-flex" src="./assets/images/image-removebg-preview-1.png">
            </a>
          </div>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="index.php">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Thông Kê</span>
                <span class="badge badge-pill badge-primary">Admin</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#fileman" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-server"></i>
                <span class="ml-3 item-text">Quản Lí Bản Tin</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="fileman">
                <a class="nav-link pl-3" href="./dsbantincho.php"><span class="ml-1">Danh sách bản tin chờ</span></a>
                <a class="nav-link pl-3" href="./dsbantinduyet.php"><span class="ml-1">Bản tin đã xác nhận</span></a>
                <a class="nav-link pl-3" href="./dsbantinsvip.php"><span class="ml-1">Bản tin ưu tiên</span></a>
                <a class="nav-link pl-3" href="./dsbantinsvipcp.php"><span class="ml-1">Danh sách bản tin ưu tiên</span></a>
                <a class="nav-link pl-3" href="./dsbaocaotin.php"><span class="ml-1">Báo cáo bản tin</span></a>
                <a class="nav-link pl-3" href="./dsbaocaocp.php"><span class="ml-1">Báo cáo đã xác thực</span></a>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Quản lí danh mục menu</span><span class="sr-only">(current)</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
                <li class="nav-item active">
                  <a class="nav-link pl-3" href="./dsmenu.php"><span class="ml-1 item-text">Danh Sách Menu</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./AddMenu.php"><span class="ml-1 item-text">Thêm Menu Mới</span></a>
                </li>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#dsphong" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-bookmark fe-16"></i>
                <span class="ml-3 item-text">Quản Lí Bài Viết</span><span class="sr-only">(current)</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="dsphong">
                <li class="nav-item active">
                  <a class="nav-link pl-3" href="./dsphonga.php"><span class="ml-1 item-text">Danh Sách Bài Viết</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./AddRoom.php"><span class="ml-1 item-text">Thêm Bài Viết Mới</span></a>
                </li>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-mail"></i>
                <span class="ml-3 item-text">Quản Lý Liên Hệ</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./dsfeedback.php"><span class="ml-1 item-text">DS Liên Hệ Đã Nhận</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./compleFeedback.php"><span class="ml-1 item-text">DS Liên Hệ Đã Xác Nhận</span></a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-pie-chart fe-16"></i>
                <span  class="ml-3 item-text">Quản lí tài khoản</span>
                <span class="badge badge-pill badge-primary">Admin</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="charts">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./dstaikhoan.php"><span class="ml-1 item-text">Danh sách tài khoản</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="phanquyenTK.php"><span class="ml-1 item-text">Phân quyền tài khoản</span></a>
                </li>
              </ul>
            </li>
            
          </ul>
          <div class="btn-box w-100 mt-4 mb-1">
            <a href="https://themeforest.net/item/tinydash-bootstrap-html-admin-dashboard-template/27511269" target="_blank" class="btn mb-2 btn-primary btn-lg btn-block">
              <i class="fe fe-log-out fe-12 mx-2"></i><span class="small">Đăng Xuất</span>
            </a>
          </div>
        </nav>
      </aside>