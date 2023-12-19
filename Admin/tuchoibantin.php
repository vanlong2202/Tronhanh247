<?php include("header.php"); 
include_once(__DIR__ . '/model/config.php');
$TinID= $_GET['id'];

?>
<main role="main" class="main-content">
    <form action="model/cf_tuchoibantin.php" method="post">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <h4 class="card-title">Xác Nhận Từ Chối Bản Tin</h4>
                </div>
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
                        <label for="example-static">Lý do từ chối</label>
                        <textarea name="Description" id="Description" class="form-control" type="text" placeholder="Nhập lí do tại đây ..." rows="6"></textarea>
                        </div>
                    </div>
                    <div class="form-group d-grid gap-2 col-2 mx-auto mb-3">
                        <input name="" type="submit" class="btn btn-danger" value="Xác Nhận"> 
                    </div>
                  </div>
                </div>
              </div> <!-- / .card -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div>
    </form>
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