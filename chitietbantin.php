<?php 
include('header.php');
include_once(__DIR__ . '/model/config.php');
$TinID = $_GET['id'];
$sql = "SELECT * FROM tbltindv inner join tbltaikhoan on tbltindv.Tk_ID=tbltaikhoan.Tk_ID WHERE TinID = $TinID";
$result = mysqli_query($conn,$sql);
$row1 = mysqli_fetch_assoc($result);
$Tin_diachi = $row1['Tin_diachi'];
$TinID = $row1['TinID'];
$ds = "SELECT * FROM tbltindv WHERE Tin_diachi = '$Tin_diachi' AND TinID != $TinID"; // Thay đổi truy vấn SQL
$result2 = mysqli_query($conn, $ds);
$ds = [];
$TT = 1;
while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
    $ds[] = array(
    'TT' => $TT,
    'TinID' => $row['TinID'],
    'Tin_title' => $row['Tin_title'],
    'Tin_gia' => $row['Tin_gia'],
    'Tin_phong' => $row['Tin_phong'],
    'Tin_dientich' => $row['Tin_dientich'],
    'Tin_toida' => $row['Tin_toida'],
    'Tin_phongtrong' => $row['Tin_phongtrong'],
    'Tin_diachi' => $row['Tin_diachi'],
    'Tin_diachichitiet' => $row['Tin_diachichitiet'],
    'Tin_tuquan' => $row['Tin_tuquan'],
    'Tin_image1' => $row['Tin_image1'],
    'Tin_time' => $row['Tin_time'],
    );
    $TT++;
}
?>
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a>  /  Chi Tiết Bản Tin</span>
          <h3>Thông Tin Chi Tiết Bản Tin</h3>
        </div>
      </div>
    </div>
  </div>
        <div class="single-property section">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="main-banner">
                    <div class="owl-carousel owl-banner">
                    <div class="">
                        <img src="<?php echo $row1['Tin_image1']; ?>" alt="">
                    </div>
                    <div class="">
                        <img src="<?php echo $row1['Tin_image2']; ?>" alt="">
                    </div>
                    <div class="">
                        <img src="<?php echo $row1['Tin_image3']; ?>" alt="">
                    </div>
                    
                </div>
            </div>
                <div class="main-content">
                    <span class="category"><?php echo $row1['Tin_diachi']; ?></span>
                    <h4><?php echo $row1['Tin_title']; ?></h4>
                    <h5 class="mb-3">Thông tin chi tiết</h5>
                    <table style="border-radius: 8px;" class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="col-lg-2" scope="col">Địa chỉ:</th>
                            <td colspan="3"><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['Tin_diachichitiet']; ?></span></td>
                        </tr>
                        <tr>
                            <th scope="col">Giá:</th>
                            <td colspan="3"><span style="font-weight: bold; color: #0045A8;">khoảng <?php echo number_format($row1['Tin_gia']); ?> đồng/tháng</span></td>
                        </tr>
                        <tr>
                            <th scope="col">Hình thức:</th>
                            <td class="col-lg-3"><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['Tin_hinhthuc']; ?></span></td>
                            <th class="col-lg-2" scope="col">Người đăng:</th>
                            <td><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['FullName']; ?></span></td>
                        </tr>
                        <tr>
                            <th scope="col">Diện tích:</th>
                            <td><span style="font-weight: bold; color: #0045A8;">khoảng <?php echo $row1['Tin_dientich']; ?> m²</span></td>
                            <th scope="col">Điện thoại:</th>
                            <td><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['Phone']; ?></span></td>
                        </tr>
                        <tr>
                            <th scope="col">Số phòng:</th>
                            <td><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['Tin_phong']; ?> phòng</span></td>
                            <th scope="col">Facebook:</th>
                            <td><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['Facebook']; ?></span></td>
                        </tr>
                        <tr>
                            <th scope="col">Phòng trống:</th>
                            <td><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['Tin_phongtrong']; ?> phòng</span></td>
                            <th scope="col">Email:</th>
                            <td><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['Email']; ?></span></td>
                        </tr>
                        <tr>
                            <th scope="col">Ở tối đa:</th>
                            <td><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['Tin_toida']; ?> người/phòng</span></td>
                            <th scope="col">Ngày cập nhật:</th>
                            <td><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['Tin_time']; ?></span></td>
                        </tr>
                        
                        <!-- Thêm các trường khác tương tự cho các thông tin khác -->
                        </thead>
                    </table>
                  <div>
                    <h4></h4>
                    <h5 class="mb-3">Mô tả chi tiết</h5>
                    <p>
                        <?php echo $Tin_diachi; ?>
                      <?php echo $row1['Tin_chitiet']; ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="info-table">
                <ul>
                    <li>
                        <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                        <h4><?php echo $row1['Tin_dientich']; ?> m²<br><span>Diện tích phòng</span></h4>
                    </li>
                    <li>
                        <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                        <h4>+84 <?php echo $row1['Phone']; ?><br><span>Số điện thoại liên hệ</span></h4>
                    </li>
                    <li>
                        <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                        <h4><?php echo number_format($row1['Tin_gia']); ?> VND<br><span>Giá dịch vụ</span></h4>
                    </li>
                    <li>
                        <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                        <h4><?php echo $row1['Tin_hinhthuc']; ?><br><span>Hình thức</span></h4>
                    </li>
                    <li>
                        <img src="assets\images\phone-icon.png" alt="" style="max-width: 52px;">
                        <h4><?php echo $row1['FullName']; ?><br><span>Liên Hệ Chủ Trọ</span></h4>
                    </li>
                    </ul>
                    <div class="mt-4 text-center">
                        <a href="tel:<?php echo $row1['Phone']; ?>"><input  name="" type="submit" class="btn btn-danger" value="GỌI NGAY"> </a>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="tel:<?php echo $row1['Phone']; ?>"><input  name="" type="submit" class="btn mb-2 btn-primary btn-sm" value="Báo tin không hợp lệ"> </a>
                        <a href="tel:<?php echo $row1['Phone']; ?>"><input  name="" type="submit" class="btn mb-2 btn-primary btn-sm" value="Báo tin hết phòng"> </a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
<!-- jdj -->
<div class="container mt-5">
    <div class="section-heading">
        <h4 style="color: #ee626b;">| Tin Trọ Cùng Đường</h4>
    </div>
</div>
<div class="properties section mt-1">

  <div class="container">
  <div class="row">
      <div class="row">
        <?php foreach ($ds as $row) : ?>
          <div class="col-lg-4 col-md-6">
            <div class="item">
              <a href="property-details.html"><img style="height: 260px; width: 350px;" src="<?php echo $row['Tin_image1']; ?>" alt=""></a>
              <span class="category"><?php echo $row['Tin_diachi']; ?></span>
              <h6><?php echo number_format($row['Tin_gia']); ?> VNĐ</h6>
              <h4><a href="property-details.html"><?php echo $row['Tin_title']; ?></a></h4>
              <p><?php echo $row['Tin_diachichitiet']; ?></p>
              <ul>
                <li><span><?php echo $row['Tin_time']; ?></span></li>
              </ul>
              <div class="main-button">
                <a href="chitietbantin.php?id=<?php echo $row['TinID']; ?>">THÔNG TIN CHI TIẾT</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>



<footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. </p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>