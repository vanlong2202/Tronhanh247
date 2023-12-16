<?php include("header.php"); 
// ob_start();
// include('./model/config.php');
// if(isset($_POST['addtk'])){
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $level = $_POST['level'];
//     $email = $_POST['email'];
//     $addtk = "INSERT INTO tbltaikhoan(Username,Password,Level,Email) VALUES ('$username','$password','$level','$email')";
//     mysqli_query($conn,$addtk);
//     header("Location: ../dstaikhoan.php");
// }
?>
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="page-title">Thêm Tài Khoản Mới</h4>
                <div class="card shadow mb-4">
                    <form action="model/cf_addTK.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="MenuName">Tên Đăng Nhập</label>
                                        <input type="text" id="username" name="username" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="IsActive">Loại Tài Khoản</label>
                                        <select class="form-control" id="level" name="level">
                                          <option value="1">Người dùng</option>
                                          <option value="2">Quản Trị Viên</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="Levels">Mật Khẩu</label>
                                        <input type="text" id="password" name="password" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="Levels">Email</label>
                                        <input type="text" id="email" name="email" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-grid gap-2 col-2 mx-auto">
                            <input name="addtk" type="submit" class="btn btn-danger" value="Lưu thông tin"> 
                        </div>
                    </form> 
                </div>
            </div>
        </div>
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>