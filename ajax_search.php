<?php
include_once(__DIR__ . '/model/config.php');

$conditions = ["Tin_trangthai = 1"];

if (!empty($_GET['timkiem'])) {
  $searchTerm = mysqli_real_escape_string($conn, $_GET['timkiem']);
  $conditions[] = "Tin_title LIKE '%$searchTerm%' OR Tin_diachi LIKE '%$searchTerm%' AND Tin_trangthai = 1";
}

$danhsach = "SELECT * FROM tbltindv";
if (!empty($conditions)) {
  $danhsach .= " WHERE " . implode(' AND ', $conditions)." LIMIT 6";
}
$result = mysqli_query($conn, $danhsach);

if (!$result) {
  die('Lỗi truy vấn: ' . mysqli_error($conn));
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

foreach ($dataroms as $room) {
?>
  <div class="col-lg-12" href="chitietbantin.php?id=<?php echo $room['TinID']; ?>">
    <div class="item" style="display: flex; align-items: center; margin-bottom: -40px;">
      <a href="chitietbantin.php?id=<?php echo $room['TinID']; ?>"><img class="col-lg-12" style="width: 120px;" src="<?php echo $room['Tin_image1']; ?>" alt=""></a>
      <div style="margin-left: 20px; margin-top: -10px;">
        <a href="chitietbantin.php?id=<?php echo $room['TinID']; ?>" style="color: black; font-size: 20px; text-decoration: underline;">
          <?php echo $room['Tin_title']; ?>
        </a>
        <p style="color: green; font-size: 16px;" class="col-md-5"> Giá phòng: <?php echo number_format($room['Tin_gia']); ?> VNĐ </p>
        <span style="color: red;" class="col-md-5">Địa chỉ: <?php echo $room['Tin_diachi']; ?></span>
      </div>
      <div style="margin-left: auto;">
        <div class="main-button">
          <a href="chitietbantin.php?id=<?php echo $room['TinID']; ?>">Xem</a>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>
