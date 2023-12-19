<?php include("header.php");
  if (!isset($_SESSION['loggedin'])) {
    // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("Location: login.php");
    exit();
  }
  $TinID= $_GET['id'];
  include_once(__DIR__ . '/model/config.php');
  $sql = "SELECT * FROM `tbltindv` INNER JOIN tbltaikhoan ON tbltindv.Tk_ID = tbltaikhoan.Tk_ID inner JOIN tbl_lbantin on tbltindv.Ltin_ID = tbl_lbantin.Ltin_ID where tbltindv.TinID = $TinID";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

  $sql_bantin = "SELECT * from tbl_lbantin";
  $result1 = mysqli_query($conn, $sql_bantin);
  $ds = [];
  while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
    $ds[] = array(
      'Ltin_ID' => $row1['Ltin_ID'],
      'Ltin_name' =>$row1['Ltin_name'],
    );
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
  <form action="model/editbantin.php" method="post">
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
                    <input value="<?php echo $row['FullName']; ?>" type="text" name="FullName" id="FullName" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="example-email">Email</label>
                    <input value="<?php echo $row['Email']; ?>" type="email" id="Email" name="Email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="example-password">Số Điện Thoại</label>
                    <input value="<?php echo $row['Phone']; ?>" type="text" id="Phone" name="Phone" class="form-control" value="password">
                  </div>
                  <div class="form-group mb-3">
                    <label for="example-palaceholder">Facebook</label>
                    <input value="<?php echo $row['Facebook']; ?>" name="Facebook" id="Facebook" type="text" class="form-control" placeholder="Nhập đường đẫn facebook của bạn tại đây...">
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
                      <label for="example-static">Mã bản tin</label>
                      <input value="<?php echo $row['TinID']; ?>" name="TinID" id="TinID" class="form-control" type="text" placeholder="Tiêu đề bản tin..." readonly>
                    </div>
                  </div>
                  <div class="col-md-12 mb-2">
                    <div class="form-group mb-1">
                      <label for="example-static">Tiêu đề tin</label>
                      <input value="<?php echo $row['Tin_title']; ?>" name="Tin_title" id="Tin_title" class="form-control" type="text" placeholder="Tiêu đề bản tin...">
                    </div>
                  </div>
                  <div class="col-md-12 mb-2 d-flex justify-content-between">
                    <div class="col-md-3 mb-2">
                      <label for="validationCustom04">Loại Hình</label>
                      <select class="form-control" name="Ltin_ID" id="Ltin_ID" required>
                        <option value="<?php echo $row['Ltin_ID'];?>"><?php echo $row['Ltin_name']; ?></option>
                        <?php foreach ($ds as $row1): ?>
                        <option value="<?php echo $row1['Ltin_ID']; ?>"><?php echo $row1['Ltin_name']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="col-md-3 mb-1">
                      <label for="validationCustom04">Hình Thức Trọ</label>
                      <select class="form-control" name="Tin_hinhthuc" id="Tin_hinhthuc" required>
                        <option value="<?php echo $row['Tin_hinhthuc'];?>"><?php echo $row['Tin_hinhthuc'];?></option>
                        <option value="Phòng Trọ">Phòng Trọ</option>
                        <option value="Ký túc xá (dorm)">Ký túc xá (dorm)</option>
                        <option value="Chung cư mini">Chung cư mini</option>
                        <option value="Cư xá">Cư xá</option>
                        <option value="Homestay">Homestay</option>
                        <option value="Trọ nhà nguyên căn">Trọ nhà nguyên căn</option>
                        <option value="Trọ trong nhà chung chủ">Trọ trong nhà chung chủ</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-1">
                      <label for="validationCustom04">Trọ tự quản</label>
                      <select  class="form-control" name="Tin_tuquan" id="Tin_tuquan" required>
                        <option value="<?php echo $row['Tin_tuquan'];?>">
                            <?php if($row['Tin_tuquan']==0){
                              echo '---Chọn hình thức---';
                            } else if($row['Tin_tuquan']==1){
                              echo 'Không';
                            } else{
                              echo 'Có';
                            }
                            ?>
                        </option>
                        <option value="1">Không</option>
                        <option value="2">Có</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12 mb-2 d-flex justify-content-between">
                    <div class="col-md-3 mb-2">
                      <label for="example-palaceholder">Phòng trống</label>
                      <input value="<?php echo $row['Tin_phongtrong']; ?>"  name="Tin_phongtrong" id="Tin_phongtrong" type="number" id="example-palaceholder" class="form-control" placeholder="Số phòng trống">
                    </div>
                    <div class="col-md-3 mb-1">
                      <label for="example-palaceholder">Tổng phòng</label>
                      <input value="<?php echo $row['Tin_phong']; ?>" name="Tin_phong" id="Tin_phong"  type="number" class="form-control" placeholder="Tống số phòng">
                    </div>
                    <div class="col-md-3 mb-1">
                      <label for="example-palaceholder">Ở Tối Đa (người/phòng)</label>
                      <input value="<?php echo $row['Tin_toida']; ?>" type="number" name="Tin_toida" id="Tin_toida" class="form-control" placeholder="Tối đa số người ở 1 phòng">
                    </div>
                  </div>
                  <div class="col-md-12 mb-2 d-flex justify-content-between">
                      <div class="col-md-3 mb-1">
                        <label for="validationCustomUsername">Diện tích phòng</label>
                        <div class="input-group">
                          <input value="<?php echo $row['Tin_dientich']; ?>" name="Tin_dientich" id="Tin_dientich" type="number" class="form-control" placeholder="Diện tích của phòng" required>
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">m²</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationCustomUsername">Giá phòng</label>
                        <div class="input-group">

                          <input value="<?php echo $row['Tin_gia']; ?>"  name="Tin_gia" id="Tin_gia" type="text" class="form-control" placeholder="Nhập đúng giá trị tiền" required>
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">VND</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 mb-2">
                        <label for="validationCustomUsername">Giới Tính Ưu Tiên</label>
                        <select class="form-control" name="Tin_gtuutien" id="Tin_gtuutien" required>
                          <option value="<?php echo $row['Tin_gtuutien'];?>">
                              <?php if($row['Tin_gtuutien']==0){
                                echo '--- Tất cả ---';
                              } else if($row['Tin_gtuutien']==1){
                                echo 'Nữ';
                              } else{
                                echo 'Nam';
                              }
                              ?>
                          </option>
                          <option value="0">--- Tất cả ---</option>
                          <option value="1">Nữ</option>
                          <option value="2">Nam</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-md-12 mb-2">
                    <div class="form-group mb-1">
                      <label for="example-static">Địa Chỉ</label>
                      <input value="<?php echo $row['Tin_diachi']; ?>" name="Tin_diachi" id="Tin_diachi" class="form-control" type="text" placeholder="Nhập địa chỉ chi tiết tại đây ...">
                    </div>
                  </div>
                  <div class="col-md-12  mb-2">
                    <div class="form-group">
                      <label for="example-static">Mô tả chi tiết</label>
                      <textarea value="<?php echo $row['Tin_chitiet']; ?>" name="Tin_chitiet" id="Tin_chitiet" class="form-control" type="text" placeholder="Mô tả chi tiết tại đây ..." rows="6"></textarea>
                    </div>
                  </div>
                  <div class="form-group mb-12">
                          <label for="example-fileinput">Tải hình ảnh lên</label>
                          <input type="file" name="Tin_image1" id="Tin_image1" class="form-control-file">
                        </div>
                </div>
              </div>
          </div>
          <div class="form-group d-grid gap-2 col-2 mx-auto mb-3">
              <input name="" type="submit" class="btn btn-danger" value="ĐĂNG TIN"> 
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
