<!-- jdj -->
<div class="properties section">

  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <div class="section-heading text-center">
          <h6>| Bài Viết</h6>
          <h2>LỰA CHỌN NỔI BẬT</h2>
        </div>
      </div>
    </div>
    <div class="search-bar">
      <form method="get" action="">
        <div class="row">
          <div class="col-md-2 text-center">
            <input type="number" class="form-control" name="bedrooms" id="bedrooms" min="1" placeholder="Nhập số phòng ngủ">
          </div>
          <div class="col-md-2 text-center">
            <input type="number" class="form-control" name="bathrooms" id="bathrooms" min="1" placeholder="Nhập số phòng tắm">
          </div>
          <div class="col-md-2 text-center">
            <input type="number" class="form-control" name="price" id="price" min="0" placeholder="Nhập giá tối thiểu">
          </div>
          <div class="col-md-4 text-center">
            <input type="number" class="form-control" name="area" id="area" min="0" placeholder="Nhập diện tích tối thiểu">
          </div>
          <div class="col-md-2 text-center">
          <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
          </div>
        </div>
        <!-- <div class="form-group text-center mt-3">
          <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
        </div> -->
      </form>
    </div>
    <div class="row">
      <!-- Danh sách sản phẩm -->
      <?php
      include_once(__DIR__ . '/model/config.php');

      if (isset($_GET['bedrooms']) || isset($_GET['bathrooms']) || isset($_GET['price']) || isset($_GET['area'])) {
          $bedrooms = isset($_GET['bedrooms']) ? (int)$_GET['bedrooms'] : null;
          $bathrooms = isset($_GET['bathrooms']) ? (int)$_GET['bathrooms'] : null;
          $price = isset($_GET['price']) ? (int)$_GET['price'] : null;
          $area = isset($_GET['area']) ? (int)$_GET['area'] : null;

          // Chỉnh sửa truy vấn SQL để bao gồm các tham số tìm kiếm
          $danhsach = "SELECT * FROM tblrooms 
                       WHERE availability = 1 
                       AND (bedrooms = $bedrooms OR $bedrooms IS NULL)
                       AND (bathrooms = $bathrooms OR $bathrooms IS NULL)
                       AND (price >= $price OR $price IS NULL)
                       AND (area >= $area OR $area IS NULL)";
      } else {
          // Truy vấn mặc định mà không có tham số tìm kiếm
          $danhsach = "SELECT * FROM tblrooms WHERE availability = 1";
      }

      $result = mysqli_query($conn, $danhsach);

      $dataroms = [];
      $TT = 1;
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $dataroms[] = [
          'TT' => $TT,
          'user_id' => $row['user_id'],
          'title' => $row['title'],
          'description' => $row['description'],
          'price' => $row['price'],
          'img' => $row['img'],
          'bedrooms' => $row['bedrooms'],
          'bathrooms' => $row['bathrooms'],
          'area' => $row['area'],
          'floor' => $row['floor'],
          'parking' => $row['parking'],
          'availability' => $row['availability']
        ];
        $TT++;
      }

      // Hiển thị dữ liệu
      ?>
      <div class="row">
        <?php foreach ($dataroms as $room) : ?>
          <div class="col-lg-4 col-md-6">
            <div class="item">
              <a href="property-details.html"><img src="<?php echo $room['img']; ?>" alt=""></a>
              <span class="category"><?php echo $room['title']; ?></span>
              <h6><?php echo number_format($room['price'], 2); ?> VNĐ</h6>
              <h4><a href="property-details.html"><?php echo $room['description']; ?></a></h4>
              <ul>
                <li>Phòng ngủ: <span><?php echo $room['bedrooms']; ?></span></li>
                <li>Phòng tắm: <span><?php echo $room['bathrooms']; ?></span></li>
                <li>Diện tích: <span><?php echo $room['area']; ?>m2</span></li>
                <li>Tầng: <span><?php echo $room['floor']; ?></span></li>
                <li>Chỗ đỗ xe: <span><?php echo $room['parking']; ?></span></li>
              </ul>
              <div class="main-button">
                <a href="property-details.html">THÔNG TIN CHI TIẾT</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
