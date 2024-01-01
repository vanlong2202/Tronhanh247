<?php 
include('header.php');
include_once(__DIR__ . '/model/config.php');
$TinID = $_GET['id'];
$sql = "SELECT * FROM tbltindv inner join tbltaikhoan on tbltindv.Tk_ID=tbltaikhoan.Tk_ID WHERE TinID = $TinID";
$result = mysqli_query($conn,$sql);
$row1 = mysqli_fetch_assoc($result);
$Tin_diachi = $row1['Tin_diachi'];
$TinID = $row1['TinID'];
$ds = "SELECT * FROM tbltindv WHERE Tin_trangthai = 1 AND Tin_diachi = '$Tin_diachi' AND TinID != $TinID"; // Thay đổi truy vấn SQL
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
                    <h5 class="mb-3">THÔNG TIN DỊCH VỤ</h5>
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
                    <h5 class="mb-3">MÔ TẢ CHI TIẾT</h5>
                    <p>
                        <?php echo $Tin_diachi; ?>
                      <?php echo $row1['Tin_chitiet']; ?>
                    </p>
                  </div>
                  <div>
                    <h4></h4>
                    <h5 class="mb-3">LIÊN HỆ CHÍNH CHỦ</h5>
                    <table style="border-radius: 8px;" class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="col-lg-1 text-center" scope="col"><i class="fa-solid fa-user"></i></th>
                            <td colspan="3"><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['FullName']; ?></span></td>
                        </tr>
                        <tr>
                            <th class="col-lg-1 text-center" scope="col"><i class="fa-solid fa-phone"></i></th>
                            <td colspan="3"><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['Phone']; ?></span></td>
                        </tr>
                        <tr>
                            <th class="col-lg-1 text-center" scope="col"><i class="fa-solid fa-envelope"></i></th>
                            <td colspan="3"><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['Email']; ?></span></td>
                        </tr>
                        <tr>
                            <th class="col-lg-1 text-center" scope="col"><i class="fa-brands fa-facebook"></i></th>
                            <td colspan="3"><span style="font-weight: bold; color: #0045A8;"><?php echo $row1['Facebook']; ?></span></td>
                        </tr>
                        <!-- Thêm các trường khác tương tự cho các thông tin khác -->
                        </thead>
                    </table>
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
                        <a href="" data-toggle="modal" data-target="#myModal"><input  name="" type="submit" class="btn mb-2 btn-primary btn-sm" value="Báo tin không hợp lệ"> </a>
                        <a href="" data-toggle="modal" data-target="#myModal1"><input  name="" type="submit" class="btn mb-2 btn-primary btn-sm" value="Báo tin hết phòng"> </a>
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
              <a href="chitietbantin.php?id=<?php echo $row['TinID']; ?>"><img style="height: 260px; width: 350px;" src="<?php echo $row['Tin_image1']; ?>" alt=""></a>
              <span class="category"><?php echo $row['Tin_diachi']; ?></span>
              <h6><?php echo number_format($row['Tin_gia']); ?> VNĐ</h6>
              <h4><a href="chitietbantin.php?id=<?php echo $row['TinID']; ?>"><?php echo $row['Tin_title']; ?></a></h4>
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
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">BÁO TIN KHÔNG HỢP LỆ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="model/cf_baotin.php" method="post">
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 mb-2">
                          <div class="form-group mb-1">
                          <label for="example-static">Mã bản tin</label>
                          <input value="<?php echo $TinID; ?>" name="TinID" id="TinID" class="form-control" type="text" placeholder="Tiêu đề bản tin..." readonly>
                          </div>
                      </div>
                      <div class="col-md-12  mb-2">
                          <div class="form-group">
                          <!-- <label for="example-static">Lý do từ chối</label> -->
                          <textarea name="Baocao_chitiet" id="Baocao_chitiet" class="form-control" type="text" placeholder="Bạn hãy mô tả thêm thông tin" rows="6"></textarea>
                          </div>
                      </div>
                      <div class="col-md-12 mb-2">
                          <div class="form-group mb-1">
                          <label for="example-static">Điền thông tin để TroNhanh247 liên lạc với bạn khi cần thiết</label>
                          <input value="" name="Baocao_phone" id="Baocao_phone" class="form-control mb-2" type="text" placeholder="Số điện thoại">
                          <input value="" name="Baocao_email" id="Baocao_email" class="form-control" type="email" placeholder="Email">
                          </div>
                      </div>
                      <div class="form-group d-grid gap-2 col-2 mx-auto mb-3">
                          <input name="" type="submit" class="btn btn-danger" value="Xác Nhận"> 
                      </div>
                    </div>
                  </div>
              </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">BÁO TIN HẾT PHÒNG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="model/cf_baotin.php" method="post">
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 mb-2">
                          <div class="form-group mb-1">
                          <label for="example-static">Mã bản tin</label>
                          <input value="<?php echo $TinID; ?>" name="TinID" id="TinID" class="form-control" type="text" placeholder="Tiêu đề bản tin..." readonly>
                          </div>
                      </div>
                      <div class="col-md-12  mb-2">
                          <div class="form-group">
                          <!-- <label for="example-static">Lý do từ chối</label> -->
                          <textarea name="Baocao_chitiet" id="Baocao_chitiet" class="form-control" type="text" placeholder="Bạn hãy mô tả thêm thông tin" rows="6"></textarea>
                          </div>
                      </div>
                      <div class="col-md-12 mb-2">
                          <div class="form-group mb-1">
                          <label for="example-static">Điền thông tin để TroNhanh247 liên lạc với bạn khi cần thiết</label>
                          <input value="" name="Baocao_phone" id="Baocao_phone" class="form-control mb-2" type="text" placeholder="Số điện thoại">
                          <input value="" name="Baocao_email" id="Baocao_email" class="form-control" type="email" placeholder="Email">
                          </div>
                      </div>
                      <div class="form-group d-grid gap-2 col-2 mx-auto mb-3">
                          <input name="" type="submit" class="btn btn-danger" value="Xác Nhận"> 
                      </div>
                    </div>
                  </div>
              </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<?php include("footer.php");?>