<?php include("header.php"); 

    require_once 'model/config.php';
    $Tk_ID= $_GET['sid'];
    $sql = "SELECT * FROM tbltaikhoan WHERE Tk_ID = '$Tk_ID'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="page-title">Cập Nhật Thông Tin Tài Khoản</h4>
                <div class="card shadow mb-4">
                    <form action="model/cf_editTK.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="MenuName">Mã Tài Khoản</label>
                                        <input value="<?php echo $row['Tk_ID']; ?>" type="text" id="Tk_ID" name="Tk_ID" readonly class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="MenuName">Tên Đăng Nhập</label>
                                        <input value="<?php echo $row['Username']; ?>" type="text" id="Username" name="Username" readonly class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="phone">Phone</label>
                                        <input value="<?php echo $row['Phone'];?>" type="text" id="Phone" name="Phone" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="phone">Địa Chỉ</label>
                                        <input value="<?php echo $row['Address'];?>" type="text" id="Address" name="Address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group mb-3">
                                        <label for="Levels">Họ và Tên</label>
                                        <input value="<?php echo $row['FullName'];?>" type="text" id="Fullname" name="Fullname" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="Levels">Mật Khẩu</label>
                                        <input value="<?php echo $row['Password'];?>" type="text" id="Password" name="Password" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="Levels">Email</label>
                                        <input value="<?php echo $row['Email'];?>" type="text" id="Email" name="Email" class="form-control" placeholder="">
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