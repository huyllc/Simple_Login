<?php 
    require_once "../view/login.php";
    require_once "../model/common.php";
    require_once "../model/login.php";
    if (isValid()) {
        $error = array();
        if (empty($_POST['name'])) {
            $error['name'] = "Hãy nhập tên";
        }

        if (empty($_POST['password'])) {
            $error['password'] = "Hãy nhập mật khẩu";
        }

        if (!checklogin($_POST['name'],$_POST['password']) && (!empty($_POST['name'])) && (!empty($_POST['password']))) {
            $error['name'] = "Tên đăng nhập hoặc mật khẩu không đúng!";
        }
    }

    if (isset($_POST['Register'])) {
        header("Location:register_input.php");
    }

    if (empty($error)) {
        if (isset($_POST['Login'])) {
            header("Location:login_complete.php");
        }
    }
?>