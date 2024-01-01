<?php include_once('header.php'); 
    include_once(__DIR__ . '/model/config.php');
    $Month = date("n");
    $sql_bantin = "SELECT * FROM tbltindv  Where  MONTH(Tin_time) = '$Month'";
    $total_bantin = mysqli_query($conn, $sql_bantin);
    $total_bantin = $total_bantin->num_rows;
    $sql_bantin1 = "SELECT * FROM tbltindv  Where  1";
    $total_bantin1 = mysqli_query($conn, $sql_bantin1);
    $total_bantin1 = $total_bantin1->num_rows;
    $sql_bantin2 = "SELECT * FROM tbltindv  Where  Tttindv_id = 1";
    $total_bantin2 = mysqli_query($conn, $sql_bantin2);
    $total_bantin2 = $total_bantin2->num_rows;
    $sql_bantin3 = "SELECT * FROM tbltindv  Where  Tttindv_id = 2";
    $total_bantin3 = mysqli_query($conn, $sql_bantin3);
    $total_bantin3 = $total_bantin3->num_rows;
    $sql_bantin4 = "SELECT * FROM tbltindv  Where  Tttindv_id = 3";
    $total_bantin4 = mysqli_query($conn, $sql_bantin4);
    $total_bantin4 = $total_bantin4->num_rows;
    $sql_bantincho = "SELECT * FROM tbltindv  Where Tttindv_id = 1 AND  MONTH(Tin_time) = '$Month'";
    $sql_bantinduyet = "SELECT * FROM tbltindv  Where Tttindv_id = 2 AND  MONTH(Tin_time) = '$Month'";
    $sql_bantintuchoi = "SELECT * FROM tbltindv  Where Tttindv_id = 3 AND  MONTH(Tin_time) = '$Month'";
    $total_bantincho = mysqli_query($conn, $sql_bantincho);
    $total_bantincho = $total_bantincho->num_rows;
    $total_bantinduyet = mysqli_query($conn, $sql_bantinduyet);
    $total_bantinduyet = $total_bantinduyet->num_rows;
    $total_bantintuchoi = mysqli_query($conn, $sql_bantintuchoi);
    $total_bantintuchoi = $total_bantintuchoi->num_rows;
    $sql_taikhoan = "SELECT * FROM `tbltaikhoan` WHERE 1";
    $total_taikhoan = mysqli_query($conn, $sql_taikhoan);
    $total_taikhoan = $total_taikhoan->num_rows;
    $sql_taikhoan1 = "SELECT * FROM `tbltaikhoan` WHERE Level = 1";
    $total_taikhoan1 = mysqli_query($conn, $sql_taikhoan1);
    $total_taikhoan1 = $total_taikhoan1->num_rows;
    $sql_taikhoan2 = "SELECT * FROM `tbltaikhoan` WHERE Level = 2";
    $total_taikhoan2 = mysqli_query($conn, $sql_taikhoan2);
    $total_taikhoan2 = $total_taikhoan2->num_rows;
    $sql_baocao = "SELECT * FROM `tblbaocao` WHERE 1";
    $total_baocao = mysqli_query($conn, $sql_baocao);
    $total_baocao = $total_baocao->num_rows;
    $sql_baocao1 = "SELECT * FROM `tblbaocao` WHERE Baocao_trangthai = 1";
    $total_baocao1 = mysqli_query($conn, $sql_baocao1);
    $total_baocao1 = $total_baocao1->num_rows;
    $sql_baocao2 = "SELECT * FROM `tblbaocao` WHERE Baocao_trangthai = 2";
    $total_baocao2 = mysqli_query($conn, $sql_baocao2);
    $total_baocao2 = $total_baocao2->num_rows;
    $sql_lienhe = "SELECT * FROM `tblfeedback` WHERE 1";
    $total_lienhe = mysqli_query($conn, $sql_lienhe);
    $total_lienhe = $total_lienhe->num_rows;
    $sql_lienhe1 = "SELECT * FROM `tblfeedback` WHERE Status = 1";
    $total_lienhe1 = mysqli_query($conn, $sql_lienhe1);
    $total_lienhe1 = $total_lienhe1->num_rows;
    $sql_lienhe2 = "SELECT * FROM `tblfeedback` WHERE Status = 2";
    $total_lienhe2 = mysqli_query($conn, $sql_lienhe2);
    $total_lienhe2 = $total_lienhe2->num_rows;
?>
<main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-list text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <p class="small text-muted mb-0">TỔNG BẢN TIN TRONG HỆ THỐNG</p>
                          <span class="h3 mb-0"><?php echo $total_bantin1; ?></span>
                          <!-- <span class="small text-success">+16.5%</span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-plus-circle text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <p class="small text-muted mb-0">BẢN TIN CHỜ PHÊ DUYỆT</p>
                          <span class="h3 mb-0"><?php echo $total_bantin2; ?></span>
                          <!-- <span class="small text-success">+16.5%</span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-success">
                            <i class="fe fe-16 fe-pocket text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <p class="small text-muted mb-0">BẢN TIN ĐÃ PHÊ DUYỆT</p>
                          <span class="h3 mb-0"><?php echo $total_bantin3; ?></span>
                          <!-- <span class="small text-success">+16.5%</span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-danger">
                            <i class="fe fe-16 fe-x-circle text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <p class="small text-muted mb-0">BẢN TIN ĐÃ TỪ CHỐI</p>
                          <span class="h3 mb-0"><?php echo $total_bantin4; ?></span>
                          <!-- <span class="small text-success">+16.5%</span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-list text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <p class="small text-muted mb-0">TỔNG BẢN TIN TRONG THÁNG <?php echo $Month; ?></p>
                          <span class="h3 mb-0"><?php echo $total_bantin; ?></span>
                          <!-- <span class="small text-success">+16.5%</span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-plus-circle text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <p class="small text-muted mb-0">BẢN TIN CHỜ PHÊ DUYỆT THÁNG <?php echo $Month; ?></p>
                          <span class="h3 mb-0"><?php echo $total_bantincho; ?></span>
                          <!-- <span class="small text-success">+16.5%</span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-success">
                            <i class="fe fe-16 fe-pocket text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <p class="small text-muted mb-0">BẢN TIN ĐÃ PHÊ DUYỆT THÁNG <?php echo $Month; ?></p>
                          <span class="h3 mb-0"><?php echo $total_bantinduyet; ?></span>
                          <!-- <span class="small text-success">+16.5%</span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-danger">
                            <i class="fe fe-16 fe-x-circle text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <p class="small text-muted mb-0">BẢN TIN ĐÃ TỪ CHỐI THÁNG <?php echo $Month; ?></p>
                          <span class="h3 mb-0"><?php echo $total_bantintuchoi; ?></span>
                          <!-- <span class="small text-success">+16.5%</span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        <div class="row">
                <div class="col-md-6">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong>BÁO CÁO BẢN TIN</strong>
                    </div>
                    <div class="card-body px-4">
                      <div class="row border-bottom">
                        <div class="col-4 text-center mb-3">
                          <p class="mb-1 small text-muted">Báo Cáo Chờ Xác Thực</p>
                          <span class="h3"><?php echo $total_baocao1; ?></span><br />
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="mb-1 small text-muted">Số Báo Cáo</p>
                          <span class="h3"><?php echo $total_baocao; ?></span><br />
                        </div>
                        <div class="col-4 text-center mb-3">
                          <p class="mb-1 small text-muted">Báo Cáo Đã Xác Thực</p>
                          <span class="h3"><?php echo $total_baocao2; ?></span><br />
                        </div>
                      </div>
                      <table class="table table-borderless mt-3 mb-1 mx-n1 table-sm">
                        <thead>
                          <tr>
                            <th class="w-50">Liên hệ</th>
                            <th class="text-right"></th>
                            <th class="text-right"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Đang Chờ</td>
                            <td class="text-right"></td>
                            <td class="text-right"><?php echo $total_lienhe1; ?></td>
                          </tr>
                          <tr>
                            <td>Đã Xác Nhận</td>
                            <td class="text-right"></td>
                            <td class="text-right"><?php echo $total_lienhe2; ?></td>
                          </tr>
                          <tr>
                            <td>Tổng</td>
                            <td class="text-right"></td>
                            <td class="text-right"><?php echo $total_lienhe; ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-6">
                  <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">TÀI KHOẢN TRONG HỆ THỐNG</strong>
                    </div>
                    <div class="card-body">
                      <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col-1 text-center">
                                <span class="circle circle-sm bg-danger">
                                    <i class="fe fe-16 fe-user text-white mb-0"></i>
                                </span>
                            </div>
                            <div class="col">
                              <strong><?php echo $total_taikhoan; ?></strong>
                              <div class="my-0 text-muted small">Tổng Tài Khoản</div>
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col-1 text-center">
                                <span class="circle circle-sm bg-secondary">
                                    <i class="fe fe-16 fe-user-plus text-white mb-0"></i>
                                </span>
                            </div>
                            <div class="col">
                              <strong><?php echo $total_taikhoan1; ?></strong>
                              <div class="my-0 text-muted small">Tài Khoản Người Dùng</div>
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col-1 text-center">
                                <span class="circle circle-sm bg-warning">
                                    <i class="fe fe-16 fe-user-check text-white mb-0"></i>
                                </span>
                            </div>
                            <div class="col">
                              <strong><?php echo $total_taikhoan2; ?></strong>
                              <div class="my-0 text-muted small">Tài Khoản Quản Trị Viên</div>
                            </div>
                          </div>
                        </div>
                      </div> <!-- / .list-group -->
                    </div> <!-- / .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
              </div>
      </main>
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
    <script src="js/d3.min.js"></script>
    <script src="js/topojson.min.js"></script>
    <script src="js/datamaps.all.min.js"></script>
    <script src="js/datamaps-zoomto.js"></script>
    <script src="js/datamaps.custom.js"></script>
    <script src="js/Chart.min.js"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="js/gauge.min.js"></script>
    <script src="js/jquery.sparkline.min.js"></script>
    <script src="js/apexcharts.min.js"></script>
    <script src="js/apexcharts.custom.js"></script>
    <script src='js/jquery.mask.min.js'></script>
    <script src='js/select2.min.js'></script>
    <script src='js/jquery.steps.min.js'></script>
    <script src='js/jquery.validate.min.js'></script>
    <script src='js/jquery.timepicker.js'></script>
    <script src='js/dropzone.min.js'></script>
    <script src='js/uppy.min.js'></script>
    <script src='js/quill.min.js'></script>
    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
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