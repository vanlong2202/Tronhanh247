<?php include_once('header.php');
// session_start();
// // Kiểm tra xem người dùng đã đăng nhập chưa
// if (!isset($_SESSION['loggedin'])|| $_SESSION['level'] == 2) {
//     // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
//     header("Location: login.php");
//     exit();
// }
?>
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="mb-2 page-title">Danh sách danh mục test</h2>
        <a href="AddMenu.php" type="button" class="btn mb-2 btn-info">Thêm Mới</a>
        <!-- <button  type="button" class="btn mb-2 btn-secondary"><span class="fe fe-24 fe-plus-circle"></span><a href="./AddMenu.php"> Thêm Menu Mới</a></button> -->
        <div class="row my-4">
          <!-- Small table -->
          <div class="col-md-12">
            <?php
            include_once(__DIR__ . '/model/config.php');
            $dsmenu = "SELECT * FROM tblmenu";
            
            $result = mysqli_query($conn, $dsmenu);$data = [];
            $TT = 1;
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              $data[] = array(
                'TT' => $TT,
                'MenuID' => $row['MenuID'],
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
                          <a href="EditMenu.php?sid=<?php echo $row['MenuID']; ?>" type="button" class="btn mb-2 btn-primary fe fe-24 fe-edit"> Edit</a>
                          <!-- <a href="./model/cf_deleteMenu.php?sid=<?php echo $row['MenuID']; ?>" type="button" class="btn mb-2 btn-danger fe fe-24 fe-delete"> Delete</a> -->
                          <a onclick="return confirm('Bạn có muốn xoá dịch vụ này không ?');" class="btn mb-2 btn-danger fe fe-24 fe-delete" href="./model/cf_deleleMenu.php?sid=<?php echo $row['MenuID']; ?>"><i class="dw dw-delete-3"></i> Delete</a>
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
    </div> <!-- .container-fluid -->
    <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="list-group list-group-flush my-n3">
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-box fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Package has uploaded successfull</strong></small>
                    <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                    <small class="badge badge-pill badge-light text-muted">1m ago</small>
                  </div>
                </div>
              </div>
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-download fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Widgets are updated successfull</strong></small>
                    <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                    <small class="badge badge-pill badge-light text-muted">2m ago</small>
                  </div>
                </div>
              </div>
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-inbox fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Notifications have been sent</strong></small>
                    <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                    <small class="badge badge-pill badge-light text-muted">30m ago</small>
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-link fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Link was attached to menu</strong></small>
                    <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                    <small class="badge badge-pill badge-light text-muted">1h ago</small>
                  </div>
                </div>
              </div> <!-- / .row -->
            </div> <!-- / .list-group -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body px-5">
            <div class="row align-items-center">
              <div class="col-6 text-center">
                <div class="squircle bg-success justify-content-center">
                  <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                </div>
                <p>Control area</p>
              </div>
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                </div>
                <p>Activity</p>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                </div>
                <p>Droplet</p>
              </div>
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                </div>
                <p>Upload</p>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-users fe-32 align-self-center text-white"></i>
                </div>
                <p>Users</p>
              </div>
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                </div>
                <p>Settings</p>
              </div>
            </div>
          </div>
        </div>
      </div>
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