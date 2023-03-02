<?php
require_once "../common/connect.php";
//require_once "../common/common.php";
require_once "../controller/register.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Đăng ký</title>
    <link rel="stylesheet" type="text/css" href="../../web/css/register_input.css">
  </head>
  <body>
    <div class="container">
      <div class="form-container">
        <form action="" method="post">
          <h1>Đăng ký tài khoản</h1>
          <div class="form-field">
            <label for="name">Họ tên:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($_POST['regist']) ? $_POST['name'] : "";?>">
            <span style='color:red'>
              <?php 
                if (isset($error)) { 
                    printError($error,'name');
                }
              ?>
            </span>
          </div>
          <br>

          <div class="form-field">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo isset($_POST['regist']) ? $_POST['email'] : "";?>">
            <span style='color:red'>
              <?php 
                if (isset($error)) { 
                    printError($error,'email');
                }
              ?>
            </span>
          </div>
          <br>
          
          <div class="form-field">
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" value="<?php echo isset($_POST['regist']) ? $_POST['password'] : "";?>">
            <span style='color:red'>
              <?php 
                if (isset($error)) { 
                    printError($error,'password');
                }
              ?>
            </span>
          </div>
          <br>

          <div class="form-field">
            <label for="confirm-password">Xác nhận mật khẩu:</label>
            <input type ="password" id="confirm_password" name="confirm_password"> 
            <span style='color:red'>
              <?php 
                if (isset($error)) { 
                    printError($error,'confirm_password');
                }
              ?>
            </span>
          </div>
          <br>
          
          <div id="container">
              <button type="submit" id="button1" name = "login">Đăng nhập</button>
              <button type="submit" id="button2" name = "regist">Đăng ký</button>
          </div>

        </form>
      </div>
    </div>
  </body>
</html>



