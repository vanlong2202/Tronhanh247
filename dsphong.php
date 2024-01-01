<!-- jdj -->
<style>
  #room-list {
    position: absolute;
    width: 65%;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    display: none;
    margin-top: 40px;
    /* Điều chỉnh vị trí của danh sách tìm kiếm */
  }

  #room-list ul {
    list-style: none;
    padding: 0;
  }

  #room-list li {
    padding: 10px;
    border-bottom: 1px solid #eee;
    cursor: pointer;
  }

  .search-results:focus-within #room-list {
    display: block;
  }

  .search-results:focus-within #room-list.show-results {
    display: none;
  }
</style>
<div class="properties section">

  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <div class="section-heading text-center">
          <h6>| Bài Viết</h6>
          <h2>LỰA CHỌN NỔI BẬT</h2>
        </div>
      </div>
      <div class="search-bar">
        <div class="card shadow mb-4">
          <div class="card-body" style="background-color: #dedede;">
            <div class="row">
              <div class="container mt-5">
                <div class="col-md-12 mb-2 mt-3 d-flex justify-content-center">
                  <div class="form-group col-md-8 mb-12 d-flex search-results">
                    <form id="search-form" class="col-md-12 mb-12">
                      <input type="text" class="form-control" name="timkiem" id="timkiem" placeholder="Tìm Kiếm Nhanh">
                    </form>

                    <div id="room-list" class="card shadow mb-4 col-md-8 ">
                      <!-- hiện thị kết quả ajax -->


                    </div>
                  </div>
                </div>
              </div>
              <form method="get" action="bantin.php">
                <div class="col-md-12 mb-2 d-flex justify-content-center">
                  <div class="col-md-2 mb-2">
                    <select class="form-control" name="Tin_diachi" id="Tin_diachi" required>
                      <option selected disabled value="0">Chọn địa điểm</option>
                      <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                      <option value="Hà Nội">Hà Nội</option>
                      <option value="Đà Nẵng">Đà Nẵng</option>
                      <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                      <option value="Bình Dương">Bình Dương</option>
                      <option value="An Giang">An Giang</option>
                      <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                      <option value="Bắc Giang">Bắc Giang</option>
                      <option value="Bắc Kạn">Bắc Kạn</option>
                      <option value="Bạc Liêu">Bạc Liêu</option>
                      <option value="Bắc Ninh">Bắc Ninh</option>
                      <option value="Bến Tre">Bến Tre</option>
                      <option value="Bình Phước">Bình Phước</option>
                      <option value="Bình Thuận">Bình Thuận</option>
                      <option value="Bình Định">Bình Định</option>
                      <option value="Cà Mau">Cà Mau</option>
                      <option value="Cần Thơ">Cần Thơ</option>
                      <option value="Cao Bằng">Cao Bằng</option>
                      <option value="Gia Lai">Gia Lai</option>
                      <option value="Hà Giang">Hà Giang</option>
                      <option value="Hà Nam">Hà Nam</option>
                      <option value="Hà Tĩnh">Hà Tĩnh</option>
                      <option value="hHải Dương">Hải Dương</option>
                      <option value="Hải Phòng">Hải Phòng</option>
                      <option value="hHậu Giang">Hậu Giang</option>
                      <option value="Hòa Bình">Hòa Bình</option>
                      <option value="Hưng Yên">Hưng Yên</option>
                      <option value="Khánh Hòa">Khánh Hòa</option>
                      <option value="Kiên Giang">Kiên Giang</option>
                      <option value="Kon Tum">Kon Tum</option>
                      <option value="Lai Châu">Lai Châu</option>
                      <option value="Lâm Đồng">Lâm Đồng</option>
                      <option value="Lạng Sơn">Lạng Sơn</option>
                      <option value="Lào Cai">Lào Cai</option>
                      <option value="Long An">Long An</option>
                      <option value="Nam Định">Nam Định</option>
                      <option value="Nghệ An">Nghệ An</option>
                      <option value="Ninh Bình">Ninh Bình</option>
                      <option value="Ninh Thuận">Ninh Thuận</option>
                      <option value="Phú Thọ">Phú Thọ</option>
                      <option value="Phú Yên">Phú Yên</option>
                      <option value="Quảng Bình">Quảng Bình</option>
                      <option value="Quảng Nam">Quảng Nam</option>
                      <option value="Quảng Ngãi">Quảng Ngãi</option>
                      <option value="Quảng Ninh">Quảng Ninh</option>
                      <option value="Quảng Trị">Quảng Trị</option>
                      <option value="Sóc Trăng">Sóc Trăng</option>
                      <option value="Sơn La">Sơn La</option>
                      <option value="Tây Ninh">Tây Ninh</option>
                      <option value="Thái Bình">Thái Bình</option>
                      <option value="Thái Nguyên">Thái Nguyên</option>
                      <option value="Thanh Hóa">Thanh Hóa</option>
                      <option value="Tiền Giang">Tiền Giang</option>
                      <option value="Trà Vinh">Trà Vinh</option>
                      <option value="Tuyên Quang">Tuyên Quang</option>
                      <option value="Vĩnh Long">Vĩnh Long</option>
                      <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                      <option value="Yên Bái">Yên Bái</option>
                      <option value="Đắk Lắk">Đắk Lắk</option>
                      <option value="Đắk Nông">Đắk Nông</option>
                      <option value="Điện Biên">Điện Biên</option>
                      <option value="ồng Nai">Đồng Nai</option>
                      <option value="Đồng Tháp">Đồng Tháp</option>
                    </select>
                  </div>
                  <div class="col-md-2 mb-1">
                    <select class="form-control" name="Tin_hinhthuc" id="Tin_hinhthuc" required>
                      <option selected disabled value="0">Chọn loại hình</option>
                      <option value="Phòng Trọ">Phòng Trọ</option>
                      <option value="Ký túc xá (dorm)">Ký túc xá (dorm)</option>
                      <option value="Chung cư mini">Chung cư mini</option>
                      <option value="Cư xá">Cư xá</option>
                      <option value="Homestay">Homestay</option>
                      <option value="Trọ nhà nguyên căn">Trọ nhà nguyên căn</option>
                      <option value="Trọ trong nhà chung chủ">Trọ trong nhà chung chủ</option>
                    </select>
                  </div>
                  <div class="col-md-2 mb-2">
                    <select class="form-control" name="Tin_tuquan" id="Tin_tuquan" required>
                      <option selected disabled value="0">Chọn giá</i></option>
                      <option value="1">Không</option>
                      <option value="2">Có</option>
                    </select>
                  </div>
                  <div class="col-md-2 mb-1">
                    <button type="submit" class="form-control btn btn-primary">Tìm Kiếm</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Danh sách sản phẩm -->
      <?php
      include_once(__DIR__ . '/model/config.php');

      $search_query = "SELECT * FROM tbltindv WHERE Tin_svip = 1 AND Tin_trangthai = 1 AND Tttindv_id = 2 ORDER BY Tin_time DESC LIMIT 6";

      if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $location = isset($_GET["Tin_diachi"]) ? $_GET["Tin_diachi"] : "0";
        $type = isset($_GET["Tin_hinhthuc"]) ? $_GET["Tin_hinhthuc"] : "0";
        $price = isset($_GET["Tin_gia"]) ? $_GET["Tin_gia"] : "0";

        if ($location != "0") {
          $search_query .= " AND Tin_diachi = '$location'";
        }

        if ($type != "0") {
          $search_query .= " AND Tin_hinhthuc = '$type'";
        }

        if ($price != "0") {
          $search_query .= " AND Tin_gia = '$price'";
        }
      }

      $result = mysqli_query($conn, $search_query);

      if (!$result) {
        die('Query failed: ' . mysqli_error($conn));
      }

      $dataroms = [];
      $TT = 1;

      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $dataroms[] = [
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
        ];
        $TT++;
      }
      ?>

      <div class="row">
        <?php foreach ($dataroms as $room) : ?>
          <div class="col-lg-4 col-md-6">
            <div class="item">
              <a href="chitietbantin.php?id=<?php echo $room['TinID']; ?>"><img style="height: 260px; width: 350px;" src="<?php echo $room['Tin_image1']; ?>" alt=""></a>
              <span class="category"><?php echo $room['Tin_diachi']; ?></span>
              <h6><?php echo number_format($room['Tin_gia']); ?> VNĐ</h6>
              <h4><a href="chitietbantin.php?id=<?php echo $room['TinID']; ?>"><?php echo $room['Tin_title']; ?></a></h4>
              <p><?php echo $room['Tin_diachichitiet']; ?></p>
              <ul>
                <li><span><?php echo $room['Tin_time']; ?></span></li>
              </ul>
              <div class="main-button">
                <a href="chitietbantin.php?id=<?php echo $room['TinID']; ?>">THÔNG TIN CHI TIẾT</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    // Bắt sự kiện khi người dùng nhập vào ô tìm kiếm
    $("#timkiem").on("input", function() {
      // Lấy dữ liệu từ form tìm kiếm
      var formData = $("#search-form").serialize();

      // Thực hiện yêu cầu Ajax
      $.ajax({
        type: "GET",
        url: "ajax_search.php", // Tên tệp xử lý tìm kiếm Ajax của bạn
        data: formData,
        success: function(response) {
          // Cập nhật nội dung của #room-list với kết quả tìm kiếm
          $("#room-list").html(response);
        },
        error: function(error) {
          console.log("Lỗi Ajax: " + error);
        }
      });
    });
  });
</script>