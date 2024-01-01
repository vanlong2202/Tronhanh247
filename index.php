  <?php include("header.php");
  include_once(__DIR__.'/model/config.php');
  $sql = "SELECT * FROM tbltindv inner join tbltaikhoan on tbltindv.Tk_ID=tbltaikhoan.Tk_ID WHERE Tin_svip = 1 AND Ltin_ID = 2 AND Tin_trangthai = 1 ORDER BY Tin_time DESC LIMIT 1";
  $result = mysqli_query($conn,$sql);
  $row1 = mysqli_fetch_assoc($result);
  $sql1 = "SELECT * FROM tbltindv inner join tbltaikhoan on tbltindv.Tk_ID=tbltaikhoan.Tk_ID WHERE Tin_svip = 1 AND Ltin_ID = 3 AND Tin_trangthai = 1 ORDER BY Tin_time DESC LIMIT 1";
  $result1 = mysqli_query($conn,$sql1);
  $row2 = mysqli_fetch_assoc($result1);
  ?>
  <div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">Việt Nam, <em>2023</em></span>
          <h2>TÌM NHANH, KIẾM DỄ TRỌ MỚI TOÀN QUỐC</h2>
        </div>
      </div>
    </div>
  </div>
<?php include('./dsphong.php') ?>
  <div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image">
            <img style="height: 500px; width: 422px;" src="<?php echo $row1['Tin_image1']; ?>" alt="">
            <a href="chitietbantin.php?id=<?php echo $row1['TinID']; ?>"><img src="assets/images/featured-icon.png" alt="" style="max-width: 60px; padding: 0px;"></a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>| Nhà, Căn Hộ Cho Thuê </h6>
            <h2><?php echo $row1['Tin_title'];?></h2>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Thông Tin Dịch Vụ
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse  " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <ul>
                        <li>Tổng phòng: <span style="font-weight: bold;"><?php echo $row1['Tin_phong']; ?></span></li>
                      </ul>
                    </div>
                    <div>
                      <ul>
                        <li>Phòng trống: <span style="font-weight: bold;"><?php echo $row1['Tin_phongtrong']; ?></span></li>
                      </ul>
                    </div>
                    <div class="col-md-3 mb-2">
                      <ul>
                        <li>Ở tối đa: <span style="font-weight: bold;"><?php echo $row1['Tin_toida']; ?></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div>
                      <ul>
                        <li>Giới tính ưu tiên: <span style="font-weight: bold;"><?php if($row1['Tin_gtuutien']==0){
                              echo 'Tất cả';
                            } else if($row1['Tin_gtuutien']==1){
                              echo 'Nữ';
                            } else{
                              echo 'Nam';
                            }
                            ?></span></li>
                      </ul>
                    </div>
                    <div class="col-md-3 mb-2">
                      <ul>
                        <li>Tự quản: <span style="font-weight: bold;"><?php if($row1['Tin_tuquan']==1){
                              echo 'Không';
                            } else{
                              echo 'Có';
                            }
                            ?></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div>
                      <ul>
                        <li>Địa chỉ chi tiết: <span style="font-weight: bold;"><?php echo $row1['Tin_diachichitiet']; ?></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Mô Tả Chi Tiết
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <?php echo $row1['Tin_chitiet'];?>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Thông Tin Liên Hệ
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li>Tên chủ: <span style="font-weight: bold;"><?php echo $row1['FullName'];?></span></li>
                    <li>Số điện thoại: <span style="font-weight: bold;"><?php echo $row1['Phone'];?></span></li>
                    <li>Email: <span style="font-weight: bold;"><?php echo $row1['Email'];?></span></li>
                    <li>Facebook: <span style="font-weight: bold;"><?php echo $row1['Facebook'];?></span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
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
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>| Tìm Ở Ghép</h6>
            <h2>THÔNG TIN NGƯỜI Ở GHÉP</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <!-- <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment" aria-selected="true">Appartment</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Villa House</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Penthouse</button>
                  </li>
                </ul>
              </div>               -->
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Diện Tích Phòng <span><?php echo $row2['Tin_dientich']; ?> m²</span></li>
                          <li>Giới Tính Ưu Tiên <span><?php if($row2['Tin_gtuutien']==0){
                              echo 'Tất cả';
                            } else if($row2['Tin_gtuutien']==1){
                              echo 'Nữ';
                            } else{
                              echo 'Nam';
                            }
                            ?></span></li>
                          <li>Tổng Phòng <span><?php echo $row2['Tin_phong']; ?> phòng</span></li>
                          <li>Phòng Khả Dụng <span><?php echo $row2['Tin_phongtrong']; ?> phòng</span></li>
                          <li>Ở Tối Đa <span><?php echo $row2['Tin_toida']; ?> người/phòng</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img style="height: 422px;" src="<?php echo $row2['Tin_image1']; ?>" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h3><?php echo $row2['Tin_title']; ?></h3>
                      <p><?php echo $row2['Tin_chitiet']; ?>
                      <div class="icon-button">
                        <a href="chitietbantin.php?id=<?php echo $row2['TinID']; ?>"><i class="fa fa-calendar"></i> Xem chi tiết</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Thông tin về chúng tôi</h6>
            <h2>HƠN 50.000 CHỦ TRỌ TIN TƯỞNG TRỌ MỚI</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <!-- <div class="video-frame">
            <a href="https://www.youtube.com/watch?v=3Ltxw6YIFU4&ab_channel=Tr%E1%BB%8DM%E1%BB%9Bi-K%C3%AAnhth%C3%B4ngtinPh%C3%B2ngtr%E1%BB%8D%2CNh%C3%A0chothu%C3%AA" target="_blank"><i class="fa fa-play"></i></a>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <div class="fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="555" data-speed="1000"></h2>
                   <p class="count-text ">Bản Tin được<br>cập nhật hàng tháng</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="1000" data-speed="1000"></h2>
                  <p class="count-text ">Lượt truy cập sử<br>dụng hệ thống</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="2024" data-speed="1000"></h2>
                  <p class="count-text ">Hứa hẹn<br>phát triển</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <div class="contact section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| LIÊN HỆ VỚI CHÚNG TÔI</h6>
            <h2>Gửi Phản Hồi - Đánh Giá Dịch Vụ Tại Đây</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.1102349383827!2d105.69317477473831!3d18.659048664930566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cddf0bf20f23%3A0x86154b56a284fa6d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWaW5o!5e0!3m2!1svi!2s!4v1701333714488!5m2!1svi!2s" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="item phone">
                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>090.999.9999<br><span>Số điện thoại</span></h6>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item email">
                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6>tn247@gmail.com<br><span>Email</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <form id="contact-form" action="./model/cf_addFeedback.php" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Họ Và Tên</label>
                  <input type="name" name="Fullname" id="Fullname" placeholder="Tên của bạn..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Địa Chỉ Email</label>
                  <input type="text" name="Email" id="Email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Tiêu Đề</label>
                  <input type="subject" name="FeedbackTitlle" id="FeedbackTitlle" placeholder="Subject..." autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="message">Nội Dung Chi Tiết</label>
                  <textarea name="Feedback" id="Feedback" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Gửi</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include("footer.php");?>
