<?php
include_once(__DIR__ . '/model/config.php');
session_start();
session_unset();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["submit_form1"])) 
  {
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $sql = "SELECT * FROM tbltaikhoan WHERE Username = '$username'";
    $result = mysqli_query($conn, $sql);
    if ($result) 
    {
      $row = mysqli_fetch_assoc($result);
      if ($row && isset($row["Password"])) 
      {
        $hashed_password = $row["Password"];
        if ($password === $hashed_password) 
        {
          // Khởi tạo session
          session_start();
          // Thiết lập biến session
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $row["Username"];
          $_SESSION['tk_id'] = $row["Tk_ID"];
          $_SESSION['level'] = $row["Level"];
          // Chuyển hướng đến welcome.php
          header("Location: index.php");
          exit();
        } 
        else 
        {
          $errorMessage = "Email hoặc mật khẩu không chính xác. Vui lòng thử lại.";
        }
      } 
      else 
      {
        $errorMessage = "Tên đăng nhập và mật khẩu không được để trống !";
      }
    } 
    else 
    {
      error_log("Lỗi truy vấn SQL: " . mysqli_error($conn));
      $errorMessage = "Đã xảy ra lỗi, vui lòng thử lại sau.";
    }
  }
  if (isset($_POST["submit_form2"])) 
  {
    $username1 = $_POST["Username1"];
    $email1 = $_POST["Email1"];
    $password1 = $_POST["Password1"];
    $level = 1;
    $checkEmail = "SELECT * FROM tbltaikhoan WHERE Email = '$email1'";
    $checkUsername = "SELECT * FROM tbltaikhoan WHERE Username = '$username1'";
    $result1 = mysqli_query($conn, $checkEmail);
    $result2 = mysqli_query($conn, $checkUsername);
    if (mysqli_num_rows($result1) > 0)
    {
      $Notification = "Email đã tồn tại, Vui lòng thử lại !";
    }
    elseif(mysqli_num_rows($result2) > 0)
    {
      $Notification = "Username đã tồn tại, Vui lòng thử lại !";
    }
    else{
      $addTK = "INSERT INTO tbltaikhoan(Username,Password,Email,LeveL) VALUES ('$username1','$password1','$email1',$level)";
      mysqli_query($conn,$addTK);
      $Notification1 = "Đăng Kí Tài Khoản Thành Công.";
      // header("Location: login.php");
    }
  }
  // Đóng kết nối cơ sở dữ liệu
  mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <title>Đăng Nhập</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body,
      input {
        font-family: "Poppins", sans-serif;
      }

      .container {
        position: relative;
        width: 100%;
        background-color: #fff;
        min-height: 100vh;
        overflow: hidden;
      }

      .forms-container {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
      }

      .signin-signup {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        left: 75%;
        width: 50%;
        transition: 1s 0.7s ease-in-out;
        display: grid;
        grid-template-columns: 1fr;
        z-index: 5;
      }

      form {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0rem 5rem;
        transition: all 0.2s 0.7s;
        overflow: hidden;
        grid-column: 1 / 2;
        grid-row: 1 / 2;
      }

      form.sign-up-form {
        opacity: 0;
        z-index: 1;
      }

      form.sign-in-form {
        z-index: 2;
      }

      .title {
        font-size: 2.2rem;
        color: #444;
        margin-bottom: 10px;
      }

      .input-field {
        max-width: 380px;
        width: 100%;
        background-color: #f0f0f0;
        margin: 10px 0;
        height: 55px;
        border-radius: 55px;
        display: grid;
        grid-template-columns: 15% 85%;
        padding: 0 0.4rem;
        position: relative;
      }

      .input-field i {
        text-align: center;
        line-height: 55px;
        color: #acacac;
        transition: 0.5s;
        font-size: 1.1rem;
      }

      .input-field input {
        background: none;
        outline: none;
        border: none;
        line-height: 1;
        font-weight: 600;
        font-size: 1.1rem;
        color: #333;
      }

      .input-field input::placeholder {
        color: #aaa;
        font-weight: 500;
      }

      .social-text {
        padding: 0.7rem 0;
        font-size: 1rem;
      }

      .social-media {
        display: flex;
        justify-content: center;
      }

      .social-icon {
        height: 46px;
        width: 46px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 0.45rem;
        color: #333;
        border-radius: 50%;
        border: 1px solid #333;
        text-decoration: none;
        font-size: 1.1rem;
        transition: 0.3s;
      }

      .social-icon:hover {
        color: #4481eb;
        border-color: #4481eb;
      }

      .btn {
        width: 150px;
        background-color: #fd8d59;
        border: none;
        outline: none;
        height: 49px;
        border-radius: 49px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
        margin: 10px 0;
        cursor: pointer;
        transition: 0.5s;
      }

      .btn:hover {
        background-color: #4da1e2;
      }
      .panels-container {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
      display: grid;
        grid-template-columns: repeat(2, 1fr);
      }

      .container:before {
        content: "";
        position: absolute;
        height: 2000px;
        width: 2000px;
        top: -10%;
        right: 48%;
        transform: translateY(-50%);
        background-image: linear-gradient(-45deg, #4481eb 0%, #04befe 100%);
        transition: 1.8s ease-in-out;
        border-radius: 50%;
        z-index: 6;
      }

      .image {
        width: 100%;
        transition: transform 1.1s ease-in-out;
        transition-delay: 0.4s;
      }

      .panel {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: space-around;
        text-align: center;
        z-index: 6;
      }

      .left-panel {
        pointer-events: all;
        padding: 3rem 17% 2rem 12%;
      }

      .right-panel {
        pointer-events: none;
        padding: 3rem 12% 2rem 17%;
      }

      .panel .content {
        color: #fff;
        transition: transform 0.9s ease-in-out;
        transition-delay: 0.6s;
      }

      .panel h3 {
        font-weight: 600;
        line-height: 1;
        font-size: 1.5rem;
      }

      .panel p {
        font-size: 0.95rem;
        padding: 0.7rem 0;
      }

      .btn.transparent {
        margin: 0;
        background: none;
        border: 2px solid #fff;
        width: 130px;
        height: 41px;
        font-weight: 600;
        font-size: 0.8rem;
      }

      .right-panel .image,
      .right-panel .content {
        transform: translateX(800px);
      }

      /* ANIMATION */

      .container.sign-up-mode:before {
        transform: translate(100%, -50%);
        right: 52%;
      }

      .container.sign-up-mode .left-panel .image,
      .container.sign-up-mode .left-panel .content {
        transform: translateX(-800px);
      }

      .container.sign-up-mode .signin-signup {
        left: 25%;
      }

      .container.sign-up-mode form.sign-up-form {
        opacity: 1;
        z-index: 2;
      }

      .container.sign-up-mode form.sign-in-form {
        opacity: 0;
        z-index: 1;
      }

      .container.sign-up-mode .right-panel .image,
      .container.sign-up-mode .right-panel .content {
        transform: translateX(0%);
      }

      .container.sign-up-mode .left-panel {
        pointer-events: none;
      }

      .container.sign-up-mode .right-panel {
        pointer-events: all;
      }

      @media (max-width: 870px) {
        .container {
          min-height: 800px;
          height: 100vh;
        }
        .signin-signup {
          width: 100%;
          top: 95%;
          transform: translate(-50%, -100%);
          transition: 1s 0.8s ease-in-out;
        }

        .signin-signup,
        .container.sign-up-mode .signin-signup {
          left: 50%;
        }

        .panels-container {
          grid-template-columns: 1fr;
          grid-template-rows: 1fr 2fr 1fr;
        }
        .panel {
          flex-direction: row;
          justify-content: space-around;
          align-items: center;
          padding: 2.5rem 8%;
          grid-column: 1 / 2;
        }

        .right-panel {
          grid-row: 3 / 4;
        }

        .left-panel {
          grid-row: 1 / 2;
        }

        .image {
          width: 200px;
          transition: transform 0.9s ease-in-out;
          transition-delay: 0.6s;
        }

        .panel .content {
          padding-right: 15%;
          transition: transform 0.9s ease-in-out;
          transition-delay: 0.8s;
        }

        .panel h3 {
          font-size: 1.2rem;
        }

        .panel p {
          font-size: 0.7rem;
          padding: 0.5rem 0;
        }

        .btn.transparent {
          width: 110px;
          height: 35px;
          font-size: 0.7rem;
        }

        .container:before {
          width: 1500px;
          height: 1500px;
          transform: translateX(-50%);
          left: 30%;
          bottom: 68%;
          right: initial;
          top: initial;
          transition: 2s ease-in-out;
        }

        .container.sign-up-mode:before {
          transform: translate(-50%, 100%);
          bottom: 32%;
          right: initial;
        }

        .container.sign-up-mode .left-panel .image,
        .container.sign-up-mode .left-panel .content {
          transform: translateY(-300px);
        }

        .container.sign-up-mode .right-panel .image,
        .container.sign-up-mode .right-panel .content {
          transform: translateY(0px);
        }

        .right-panel .image,
        .right-panel .content {
          transform: translateY(300px);
        }

        .container.sign-up-mode .signin-signup {
          top: 5%;
          transform: translate(-50%, 0);
        }
      }

      @media (max-width: 570px) {
        form {
          padding: 0 1.5rem;
        }

        .image {
          display: none;
        }
        .panel .content {
          padding: 0.5rem 1rem;
        }
        .container {
          padding: 1.5rem;
        }

        .container:before {
          bottom: 72%;
          left: 50%;
        }

        .container.sign-up-mode:before {
          bottom: 28%;
          left: 50%;
        }
      }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="login.php" method="post" class="sign-in-form">
            <h2 class="title">ĐĂNG NHẬP</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="Username" type="text" placeholder="Username" required=""/>
            </div>
            <!-- <?php  echo $test;?> -->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="Password" type="password" placeholder="Password" required=""/>
            </div>
            <button name="submit_form1" class="btn solid" type="submit">Đăng nhập</button>
            <?php if (isset($errorMessage)) : ?>
                <?php echo '<p style="color:red;">'.$errorMessage.'</p>'; ?>
            <?php endif; ?>
            <?php if (isset($Notification)) : ?>
                <?php echo '<p style="color:red;">'.$Notification.'</p>'; ?>
            <?php endif; ?>
            <?php if (isset($Notification1)) : ?>
                <?php echo '<p style="color:green;">'.$Notification1.'</p>'; ?>
            <?php endif; ?>
          </form>
          </form>
          <form action="login.php" method="post" class="sign-up-form">
            <h2 class="title">TẠO TÀI KHOẢN</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="Username1" type="text" placeholder="Username" required=""/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="Email1" type="email" placeholder="Email" required=""/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="Password1" type="password" placeholder="Password" required=""/>
            </div>
            <button name="submit_form2" class="btn solid" type="submit">Đăng Kí</button>
            <?php if (isset($Notification)) : ?>
                <?php echo '<p style="color:red;">'.$Notification.'</p>'; ?>
            <?php endif; ?>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Bạn chưa có tài khoản?</h3>
            <p>
              Đăng kí tài khoản để sử dụng các dịch vụ cùng chúng tôi !
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Tạo Tài Khoản
            </button>
          </div>
          <img src="./assets/images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Nếu đã có tài khoản ?</h3>
            <p>
              Tiến hành quay lại đăng nhập hệ thống !
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Đăng Nhập
            </button>
          </div>
          <img src="assets/images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script type="text/javascript">
      const sign_in_btn = document.querySelector("#sign-in-btn");
      const sign_up_btn = document.querySelector("#sign-up-btn");
      const container = document.querySelector(".container");

      sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
      });

      sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
      });
    </script>
  </body>
</html>