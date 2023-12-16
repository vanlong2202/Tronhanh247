<?php include_once('header.php') ?>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h4 class="page-title">Thêm Danh Mục Menu Mới</h4>
              <div class="card shadow mb-4">
                    <form action="./model/cf_addMenu.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="MenuName">Tên Menu</label>
                                        <input type="text" id="MenuName" name="MenuName" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="Link">Đường Dẫn</label>
                                        <input type="text" id="Link" name="Link" class="form-control" placeholder="">
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        <label for="IsActive">Trạng Thái Hoạt Động</label>
                                        <select class="form-control" id="IsActive" name="IsActive">
                                          <option value="1">Hiện</option>
                                          <option value="0">Ẩn</option>
                                        </select>
                                    </div>
                                    
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="Levels">Level</label>
                                        <input type="text" id="Levels" name="Levels" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="Position">Vị Trí Hiển Thị</label>
                                        <select class="form-control" id="Position" name="Position">
                                          <option value="1">Menu Chính</option>
                                          <option value="2">Menu Con</option>
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
            <div class="col-12">
              <!-- <h2 class="mb-2 page-title">Danh sách danh mục menu</h2>
              <a href="AddMenu.php" class="btn mb-2 btn-secondary" ><span class="fe fe-24 fe-plus-circle"></span> Thêm mới</a> -->
              <!-- <button  type="button" class="btn mb-2 btn-secondary"><span class="fe fe-24 fe-plus-circle"></span><a href="./AddMenu.php"> Thêm Menu Mới</a></button> -->
              <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                  <?php
                    include_once(__DIR__.'/model/config.php');
                    $dsmenu = "SELECT * FROM tblmenu";
                    $result = mysqli_query($conn,$dsmenu);
                    $data = [];
                    $TT = 1;
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                      $data[] = array(
                        'TT' => $TT,
                        'MenuName' => $row['MenuName'],
                        'IsActive' => $row['IsActive'],
                        'Levels' => $row['Levels'],
                        'Link' => $row['Link'],
                        'Position' => $row['Position']
                      );
                      $TT++;
                    }
                  ?>
                  <div class="card shadow">
                    <div class="card-header">
                        <!-- <strong class="card-title">Danh Sách Các Danh Mục Menu</strong> -->
                    </div>
                    <div class="card-body">
                      <!-- table -->
                      <table class="table datatables" id="dataTable-1">
                        <thead>
                          <tr>
                            <th>STT</th>
                            <th>MenuName</th>
                            <th>Trạng Thái</th>
                            <th>Level</th>
                            <th>Đường Dẫn</th>
                            <th>Cấp Danh Mục</th>
                            <th>Chức Năng</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data as $row) : ?>
                          <tr>
                            <td><?php echo $row['TT']; ?></td>
                            <td><?php echo $row['MenuName']; ?></td>
                            <td><?php echo $row['IsActive']; ?></td>
                            <td><?php echo $row['Levels']; ?></td>
                            <td><?php echo $row['Link']; ?></td>
                            <td><?php echo $row['Position']; ?></td>
                            <td>
                              <a type="button" class="btn mb-2 btn-primary fe fe-24 fe-edit"> Edit</a>
                              <a type="button" class="btn mb-2 btn-danger fe fe-24 fe-delete"> Delete</a>
                              <!-- <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fe fe-24 fe-edit"></i> Edit</a>
                                <a class="dropdown-item" href="#"><span class="fe fe-24 fe-delete"> Remove</a>
                                <a class="dropdown-item" href="#">Assign</a>
                              </div> -->
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                <!-- </div> simple table -->
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
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