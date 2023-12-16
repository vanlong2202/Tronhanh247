<?php include("header.php"); 
// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['loggedin'])) {
    // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("Location: login.php");
    exit();
}
  include_once(__DIR__ . '/model/config.php');
  $sql = "SELECT * from tbltaikhoan WHERE Tk_ID ='$_SESSION[tk_id]'";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $fullname = $row["FullName"];
      $phone = $row["Phone"];
      $email = $row["Email"];
      $address = $row["Address"];
  }
?>
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a>  /  PROFILE</span>
          <h3>Trang Cá Nhân</h3>
        </div>
      </div>
    </div>
  </div>
<div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>| THÔNG TIN CHI TIẾT</h6>
            <h2><?php echo 'Xin Chào, '.$_SESSION["username"]; ?></h2>
          </div>
          <p>Vui lòng cập nhật thông tin cá nhân để thuận tiện trong việc sử dụng các dịch vụ của chúng tôi !</p>
          <div class="row">
            <div class="col-lg-12">
              <div class="item phone">
                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6><?php echo $phone; ?><br><span>Số Điện Thoại</span></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item email">
                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6><?php echo $email; ?><br><span>Địa Chỉ Email</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <form id="contact-form" action="editprofile.php" method="post">
            <div class="row">
            <div class="col-lg-12">
                <fieldset>
                  <label for="username">Tên Đăng Nhập</label>
                  <input value="<?php echo $_SESSION["username"]; ?>" type="text" name="username" id="username" placeholder="Subject..." readonly autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="fullname">Họ Và Tên</label>
                  <input value="<?php echo $fullname; ?>" type="name" name="fullname" id="fullname" placeholder="Your Name..." readonly autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="address">Địa Chỉ</label>
                  <input value="<?php echo $address; ?>" type="text" name="address" id="address" pattern="[^ @]*@[^ @]*" placeholder="Your Address..." readonly required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="phone">Số Điện Thoại</label>
                  <input value="<?php echo $phone; ?>" type="text" name="phone" id="phone" placeholder="Your Phone..."  readonly autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Địa Chỉ Email</label>
                  <input value="<?php echo $email; ?>" type="text" name="email" id="email" placeholder="Your Email..." readonly autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Cập Nhật Thông Tin</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.1102349383827!2d105.69317477473831!3d18.659048664930566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cddf0bf20f23%3A0x86154b56a284fa6d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWaW5o!5e0!3m2!1svi!2s!4v1701333714488!5m2!1svi!2s" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        
        Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>