<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>TroNhanh247 - Giải Pháp Tìm Kiếm Thông Minh</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>
 <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <!-- <h1>TroNhanh247</h1> -->
                        <img style="height: 100px;" src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                    <?php
                        include_once(__DIR__.'/model/config.php');

                        $danhsach = "SELECT MenuName, Link FROM `tblmenu` WHERE IsActive = 1";

                        $result = mysqli_query($conn,$danhsach);

                        $data = [];
                        $TT = 1;
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                          $data[] = array(
                            'TT' => $TT,
                            'MenuName' => $row['MenuName'],
                            'Link' => $row['Link']
                          );
                          $TT++;
                        }
                      ?>
                      <?php foreach ($data as $row) : ?>
                        <li><a href="<?php echo $row['Link'] ?>" class=""><?php echo $row['MenuName']; ?></a></li>
                      <?php endforeach; ?>
                      <?php
                        session_start();
                        if(isset($_SESSION['username'])){
                          if($_SESSION['level'] == 2){
                            echo '<li><a href="admin">Admin</a></li>';
                          }
                          else
                          {
                            echo '<li><a href="newpost.php">Đăng Tin</a></li>';
                          }
                          echo '<li><a href="profile.php"><i class="fa-solid fa-user"></i> Xin Chào, '.$_SESSION['username'].'</a></li>';
                          echo '<li><a href="model/deletesession.php"><i class="fa-solid fa-right-to-bracket"></i>Đăng Xuất</a></li>';
                        }
                        else{
                          echo '<li><a href="login.php"><i class="fa-solid fa-right-to-bracket"></i>Đăng Nhập</a></li>';
                        }
                      ?>
                      
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->