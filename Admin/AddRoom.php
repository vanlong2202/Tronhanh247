<?php include_once('header.php') ?>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h4 class="page-title">Thêm Phòng Mới</h4>
              <div class="card shadow mb-4">
                    <form action="./model/cf_addRoom.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="title">Tiêu Đề</label>
                                        <input type="text" id="title" name="title" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="description">Mô Tả</label>
                                        <textarea id="description" name="description" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="price">Giá</label>
                                        <input type="text" id="price" name="price" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="img">Đường Dẫn Hình Ảnh</label>
                                        <input type="text" id="img" name="img" class="form-control" placeholder="">
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="bedrooms">Phòng Ngủ</label>
                                        <input type="text" id="bedrooms" name="bedrooms" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="bathrooms">Phòng Tắm</label>
                                        <input type="text" id="bathrooms" name="bathrooms" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="area">Diện Tích</label>
                                        <input type="text" id="area" name="area" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="floor">Tầng</label>
                                        <input type="text" id="floor" name="floor" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="parking">Chỗ Đậu Xe</label>
                                        <input type="text" id="parking" name="parking" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="availability">Trạng Thái Có Sẵn</label>
                                        <select class="form-control" id="availability" name="availability">
                                          <option value="1">Có</option>
                                          <option value="0">Không</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-grid gap-2 col-2 mx-auto">
                            <input type="submit" class="btn btn-danger" value="Lưu thông tin"> 
                        </div>
                    </form> 
                </div>
            </div>
        </div>
        <div class="container-fluid">
          <div class="row justify-content-center">
          </div> <!-- .row -->
        </div>
      </main> <!-- main -->
    </div> <!-- .wrapper -->
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
      $('#dataTable-1').DataTable(
      {
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

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
    
  </body>
</html>
