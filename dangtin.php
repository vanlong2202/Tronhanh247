<?php include("header.php");
  if (!isset($_SESSION['loggedin'])) {
    // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("Location: login.php");
    exit();
  }
  include_once(__DIR__ . '/model/config.php');
  $sql = "SELECT * from tbltaikhoan WHERE Tk_ID ='$_SESSION[tk_id]'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

  if(isset($_POST['edit'])){
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $edit = "UPDATE tbltaikhoan SET FullName='$fullname',Address= '$address', Phone = '$phone', Email = '$email' Where Tk_ID = '$_SESSION[tk_id]'";
    mysqli_query($conn,$edit);
    header("location: ./profile.php");
  }
?>
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a>  /  ĐĂNG TIN</span>
          <h3>ĐĂNG TIN</h3>
        </div>
      </div>
    </div>
  </div>
  <form action="addbantin.php" method="post">
    <div class="contact-page section">
    <div class="container">
        <div class="section-heading">
            <h6>| Đăng Bản Tin</h6>
            <h2><?php echo 'Xin chào, '.$_SESSION["username"]; ?></h2>
          </div>
        <div class="card shadow mb-4">
            <div class="card-header">
              <h4 class="card-title">THÔNG TIN LIÊN HỆ</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="simpleinput">Họ Và Tên</label>
                    <input value="<?php echo $row['FullName']; ?>" type="text" id="simpleinput" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="example-email">Email</label>
                    <input value="<?php echo $row['Email']; ?>" type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="example-password">Số Điện Thoại</label>
                    <input value="<?php echo $row['Phone']; ?>" type="text" id="example-password" class="form-control" value="password">
                  </div>
                  <div class="form-group mb-3">
                    <label for="example-palaceholder">Facebook</label>
                    <input type="text" id="example-palaceholder" class="form-control" placeholder="Nhập đường đẫn facebook của bạn tại đây...">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
      <div class="container">
          <div class="card shadow mb-4">
              <div class="card-header">
                <h4 class="card-title">CHI TIẾT BẢN TIN</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 mb-2">
                    <div class="form-group mb-1">
                      <label for="example-static">Tiêu đề tin</label>
                      <input class="form-control" type="text" placeholder="Tiêu đề bản tin...">
                    </div>
                  </div>
                  <div class="col-md-12 mb-2 d-flex justify-content-between">
                    <div class="col-md-3 mb-2">
                      <label for="validationCustom04">Loại Hình</label>
                      <select class="form-control" id="validationCustom04" required>
                        <option>Cho Thuê Trọ</option>
                        <option>Cho Thuê Nhà/Căn Hộ</option>
                        <option>Tìm Ở Ghép</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-1">
                      <label for="validationCustom04">Hình Thức Trọ</label>
                      <select class="form-control" id="validationCustom04" required>
                        <option>Cho Thuê Trọ</option>
                        <option>Cho Thuê Nhà/Căn Hộ</option>
                        <option>Tìm Ở Ghép</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-1">
                      <label for="validationCustom04">Trọ tự quản</label>
                      <select class="form-control" id="validationCustom04" required>
                        <option selected disabled value="">--- Chọn Hình Thức ---</option>
                        <option>Không</option>
                        <option>Có</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12 mb-2 d-flex justify-content-between">
                    <div class="col-md-3 mb-2">
                      <label for="example-palaceholder">Phòng trống</label>
                      <input type="number" id="example-palaceholder" class="form-control" placeholder="Số phòng trống">
                    </div>
                    <div class="col-md-3 mb-1">
                      <label for="example-palaceholder">Tổng phòng</label>
                      <input type="number" id="example-palaceholder" class="form-control" placeholder="Tống số phòng">
                    </div>
                    <div class="col-md-3 mb-1">
                      <label for="example-palaceholder">Ở Tối Đa (người/phòng)</label>
                      <input type="number" id="example-palaceholder" class="form-control" placeholder="Tối đa số người ở 1 phòng">
                    </div>
                  </div>
                  <div class="col-md-12 mb-2 d-flex justify-content-between">
                      <div class="col-md-3 mb-1">
                        <label for="validationCustomUsername">Diện tích phòng</label>
                        <div class="input-group">
                          <input type="number" class="form-control" placeholder="Diện tích của phòng" required>
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">m²</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationCustomUsername">Giá phòng</label>
                        <div class="input-group">
                          
                          <input type="text" class="form-control" placeholder="Nhập đúng giá trị tiền" required>
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">VND</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="validationCustomUsername">Giới Tính Ưu Tiên</label>
                        <select class="form-control" id="validationCustom04" required>
                          <option>--- Tất cả ---</option>
                          <option>Nữ</option>
                          <option>Nam</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-md-12 mb-2">
                    <div class="form-group mb-1">
                      <label for="example-static">Địa Chỉ</label>
                      <input class="form-control" type="text" placeholder="Nhập địa chỉ chi tiết tại đây ...">
                    </div>
                  </div>
                  <div class="col-md-12  mb-2">
                    <div class="form-group">
                      <label for="example-static">Mô tả chi tiết</label>
                      <textarea class="form-control" type="text" placeholder="Mô tả chi tiết tại đây ..." rows="6"></textarea>
                    </div>
                  </div>
                  <div class="form-group mb-12">
                          <label for="example-fileinput">Tải hình ảnh lên</label>
                          <input type="file" id="example-fileinput" class="form-control-file">
                        </div>
                </div>
              </div>
          </div>
          <div class="form-group d-grid gap-2 col-2 mx-auto mb-3">
              <input name="addtk" type="submit" class="btn btn-danger" value="ĐĂNG TIN"> 
          </div>
    </div>
</form>
<footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>
