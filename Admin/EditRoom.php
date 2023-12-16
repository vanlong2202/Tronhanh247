<?php include_once('header.php'); ?>
<main role="main" class="main-content">
    <?php
    $id = $_GET['sid'];

    require_once 'model/config.php';

    $sua_sql = "SELECT * FROM tblRooms WHERE id = '$id'";

    $result = mysqli_query($conn, $sua_sql);

    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="page-title">Cập Nhật Thông Tin Phòng</h4>
                <div class="card shadow mb-4">
                    <form action="./model/cf_editRoom.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="id">id</label>
                                        <input type="text" id="id" name="id" class="form-control" readonly="" value="<?php echo $row['id']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="user_id">User ID</label>
                                        <input type="text" id="user_id" name="user_id" class="form-control" value="<?php echo $row['user_id']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="title">Tiêu Đề</label>
                                        <input type="text" id="title" name="title" class="form-control" value="<?php echo $row['title']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="description">Mô Tả</label>
                                        <textarea id="description" name="description" class="form-control"><?php echo $row['description']; ?></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="price">Giá</label>
                                        <input type="text" id="price" name="price" class="form-control" value="<?php echo $row['price']; ?>">
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="img">Đường Dẫn Hình Ảnh</label>
                                        <input type="text" id="img" name="img" class="form-control" value="<?php echo $row['img']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="bedrooms">Số Phòng Ngủ</label>
                                        <input type="text" id="bedrooms" name="bedrooms" class="form-control" value="<?php echo $row['bedrooms']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="bathrooms">Số Phòng Tắm</label>
                                        <input type="text" id="bathrooms" name="bathrooms" class="form-control" value="<?php echo $row['bathrooms']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="area">Diện Tích</label>
                                        <input type="text" id="area" name="area" class="form-control" value="<?php echo $row['area']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="floor">Số Tầng</label>
                                        <input type="text" id="floor" name="floor" class="form-control" value="<?php echo $row['floor']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="parking">Số Chỗ Đậu Xe</label>
                                        <input type="text" id="parking" name="parking" class="form-control" value="<?php echo $row['parking']; ?>">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="availability">Trạng Thái Có Sẵn</label>
                                        <select class="form-control" id="availability" name="availability">
                                            <option value="1" <?php echo ($row['availability'] == 1) ? 'selected' : ''; ?>>Có</option>
                                            <option value="0" <?php echo ($row['availability'] == 0) ? 'selected' : ''; ?>>Không</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-grid gap-2 col-2 mx-auto">
                            <input type="submit" class="btn btn-danger" value="Cập Nhật Thông Tin">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
          
        </div>
    </div>
</main> <!-- main -->
</div> <!-- .wrapper -->
<script src="js/jquery.min.js"></script>
<script src="js...
