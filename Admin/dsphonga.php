<?php include_once('header.php') ?>
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="mb-2 page-title">Danh Sách Bài Viết</h2>
        <a href="AddRoom.php" class="btn mb-2 btn-secondary"><span class="fe fe-24 fe-plus-circle"></span> Thêm mới</a>
        
        <div class="row my-4">
          <div class="col-md-12">
            <?php
            include_once(__DIR__ . '/model/config.php');
            $dsphong = "SELECT * FROM tblrooms"; // Thay đổi truy vấn SQL
            $result = mysqli_query($conn, $dsphong);
            $datarooms = [];
            $TT = 1;
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              $datarooms[] = array(
                'TT' => $TT,
                'id' => $row['id'],
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
              );
              $TT++;
            }
            ?>
            <div class="card shadow">
              <div class="card-body">
                <table class="table datatables" id="dataTable-1">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Title</th>
                      <th>Nội Dung Bài Viết</th>
                      <th>Giá</th>
                      <th>Ảnh</th>
                      <th>Phòng Ngủ</th>
                      <!-- <th>Bathrooms</th> -->
                      <th>Diện Tích</th>
                      <!-- <th>Floor</th>
                      <th>Parking</th> -->
                      <th>Trạng Thái</th>
                      <th>Chức Năng</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($datarooms as $room) : ?>
                      <tr>
                        <td><?php echo $room['TT']; ?></td>
                        <td><?php echo $room['title']; ?></td>
                        <td><?php echo $room['description']; ?></td>
                        <td><?php echo $room['price']; ?></td>
                        <td> <img src="../<?php echo $room['img']; ?>" style="width: 100px;" alt=""></td>
                        <td><?php echo $room['bedrooms']; ?></td>
                        <!-- <td><?php echo $room['bathrooms']; ?></td> -->
                        <td><?php echo $room['area']; ?></td>
                        <!-- <td><?php echo $room['floor']; ?></td>
                        <td><?php echo $room['parking']; ?></td> -->
                        <td><?php echo $room['availability']; ?></td>
                        <td>
                          <a href="EditRoom.php?sid=<?php echo $room['id']; ?>" type="button" class="btn mb-2 btn-primary fe fe-24 fe-edit"> Edit</a>
                          <a onclick="return confirm('Bạn có muốn xoá phòng này không ?');" class="btn mb-2 btn-danger fe fe-24 fe-delete" href="./model/cf_deleteRoom.php?sid=<?php echo $room['id']; ?>"><i class="dw dw-delete-3"></i> Delete</a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src='js/daterangepicker.js'></script>
<script src='js/jquery.stickOnScroll.js'></script>
<script src="js/tinycolor-min.js"></script>
<script src="js/config.js"></script>
<script src='js/jquery.dataTables.min.js'></script>
<script src='js/dataTables.bootstrap4.min.js'></script>
<script>
  $('#dataTable-1').DataTable({
    autoWidth: true,
    "lengthMenu": [
      [16, 32, 64, -1],
      [16, 32, 64, "All"]
    ]
  });
</script>
<script src="js/apps.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'UA-56159088-1');
</script>
</body>
</html>

</body>
</html>
