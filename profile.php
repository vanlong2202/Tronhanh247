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
  $sql_bantin = "SELECT * from tbltindv INNER JOIN tbl_lbantin on tbltindv.Ltin_ID = tbl_lbantin.Ltin_ID WHERE Tk_ID ='$_SESSION[tk_id]'";
  $result1 = mysqli_query($conn, $sql_bantin);
  $ds = [];
  $TT = 1;
  while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
    $ds[] = array(
      'TT' => $TT,
      'TinID' => $row1['TinID'],
      'Tin_title' =>$row1['Tin_title'],
      'Ltin_name' => $row1['Ltin_name'],
      'Description' => $row1['Description'],
      'Tin_time' => $row1['Tin_time'],
      'Tttindv_ID' => $row1['Tttindv_ID'],
    );
    $TT++;
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
      </div>
      <div class="contact-page section">
    <div class="container">
        <div class="section-heading">
          <h6>| Bản tin đã đăng</h6>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header">
              <h6 class="card-title">DANH SÁCH BẢN TIN ĐÃ ĐĂNG</h6>
            </div>
            <div class="col-md-12">
                  <div class="card-body">
                  <?php if (empty($ds)) {
                    echo 'Không có kết quả nào !';
                  } else { ?>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Tiều đề</th>
                          <th>Thời gian</th>
                          <th>Trạng thái</th>
                          <th>Lí do từ chối (Nếu có)</th>
                          <th>Chức năng</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($ds as $row1) : ?>
                        <tr>
                          <td>#<?php echo $row1['TT'] ?></td>
                          <td class="col-lg-4"><?php echo $row1['Tin_title'] ?></td>
                          <td><?php echo $row1['Tin_time'] ?></td>
                          <td class="col-lg-2"><?php if ($row1['Tttindv_ID'] == 1) : ?>
                                <button style="width: 122px;" type="button" class="btn mb-2 btn-primary btn-sm">Đang Phê Duyệt</button>
                            <?php endif; ?>
                            <?php if ($row1['Tttindv_ID'] == 2) : ?>
                                <button style="width: 122px;" type="button" class="btn mb-2 btn-success pd-2 btn-sm">Thành Công</button>
                            <?php endif; ?></span>
                            <?php if ($row1['Tttindv_ID'] == 3) : ?>
                                <button style="width: 122px;" type="button" class="btn mb-2 btn-danger btn-sm">Từ Chối</button>
                            <?php endif; ?></span></td>
                          <td><p style="color: red;"><?php echo $row1['Description'] ?></p></td>
                          <td>
                            <a onclick="return confirm('Bạn có muốn xoá bản tin này không ?');" class="btn mb-2 btn-danger btn-sm" href="./model/deletebantin.php?id=<?php echo $row1['TinID']; ?>" title="Xóa bản tin"><i class="fa-solid fa-xmark"></i></a>
                            <a href="chitietbantin.php?id=<?php echo $row1['TinID']; ?>" class="btn mb-2 btn-info btn-sm" title="Xem Chi Tiết">
                              <i class="fas fa-eye"></i>
                            </a>
                            <?php if ($row1['Tttindv_ID'] == 3) { ?>
                                <a href="danglaitin.php?id=<?php echo $row1['TinID']; ?>" type="button" class="btn mb-2 btn-secondary btn-sm" title="Đăng Lại"><i class="fa-solid fa-repeat"></i></a>
                            <?php } else { ?>
                              <a href="danglaitin.php?id=<?php echo $row1['TinID']; ?>" type="button" class="btn mb-2 btn-secondary btn-sm" title="Đăng Lại"><i class="fa-solid fa-pen-to-square"></i></a>
                            <?php } ?></span>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  <?php }?>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-12">
      <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.1102349383827!2d105.69317477473831!3d18.659048664930566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cddf0bf20f23%3A0x86154b56a284fa6d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWaW5o!5e0!3m2!1svi!2s!4v1701333714488!5m2!1svi!2s" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
      </div>
    </div>
          </div>
      </div>
    </div>
    </div>
  </div>

  <?php include("footer.php");?>