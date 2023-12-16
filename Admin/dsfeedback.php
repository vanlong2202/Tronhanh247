<?php include_once('header.php') ?>
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="mb-2 page-title">Danh Sách Liên Hệ Đã Nhận</h2>
        <!-- <a href="AddRoom.php" class="btn mb-2 btn-secondary"><span class="fe fe-24 fe-plus-circle"></span> Thêm mới</a> -->
        <div class="row my-4">
          <div class="col-md-12">
            <?php
            include_once(__DIR__ . '/model/config.php');
            $dsfeedback = "SELECT * FROM tblfeedback WHERE Status = 1"; // Thay đổi truy vấn SQL
            $result = mysqli_query($conn, $dsfeedback);
            $ds = [];
            $TT = 1;
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              $ds[] = array(
                'TT' => $TT,
                'FeedbackID' =>$row['FeedbackID'],
                'Fullname' => $row['Fullname'],
                'Email' => $row['Email'],
                'FeedbackTitlle' => $row['FeedbackTitlle'],
                'Feedback' => $row['Feedback'],
                'Status' => $row['Status'],
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
                      <th>Họ Và Tên</th>
                      <th>Email</th>
                      <th>Tiêu Đề</th>
                      <th>Nội Dung</th>
                      <th>Trạng Thái</th>
                      <th>Chức Năng</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($ds as $room) : ?>
                      <tr>
                        <td><?php echo $room['TT']; ?></td>
                        <td><?php echo $room['Fullname']; ?></td>
                        <td><?php echo $room['Email']; ?></td>
                        <td><?php echo $room['FeedbackTitlle']; ?></td>
                        <td><?php echo $room['Feedback']; ?> </td>
                        <td>
                            <button type="button" class="<?php if($room['Status'] == 1){
                                echo "btn mb-2 btn-success";
                            } ?>">Đang Chờ</button>
                        </td>
                        <td>
                          <a href="./model/cf_editFeedback.php?sid=<?php echo $room['FeedbackID']; ?>" type="button" class="btn mb-2 btn-primary">Xác Nhận Liên Hệ</a>
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
