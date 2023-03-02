<?php
    require_once "../controller/login.php";
?>

<html>
  <head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" type="text/css" href="../../web/css/login.css">
  </head>
  <body>
    <div class="container">
      <div class="form-container">
        <form action="" method="post">
          <h1>Đăng nhập</h1>
          <div class="form-field">
            <label for="name">Họ tên:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($_POST['Login']) ? $_POST['name'] : "";?>">
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
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password">
            <span style='color:red'>
              <?php 
                if (isset($error)) { 
                    printError($error,'password');
                }
              ?>
            </span>
          </div>
          <br>
          <div id="container">
              <button type="submit" id="button1" name = "Login">Đăng nhập</button>
              <button type="submit" id="button2" name = "Register">Đăng ký</button>
          </div>
        </form>
    </div>
    </div>
  </body>
</html>
