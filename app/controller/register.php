<?php
require_once "../model/register.php";
require_once "../model/common.php";
require_once "../view/register_input.php";

if (isValid()) {
    $error = array();

    if (empty($_POST['name'])) {
        $error['name'] = "Hãy nhập tên";
    }

    if (check_name($_POST['name'])){
        $error['name'] = "Tên đã có người sử dụng";
    }

    if (empty($_POST['password'])) {
        $error['password'] = "Hãy nhập mật khẩu";
    }

    if (empty($_POST['confirm_password'])) {
        $error['confirm_password'] = "Hãy nhập lại mật khẩu";
    }

    if (($_POST['password']!=$_POST['confirm_password'])&&(!empty($_POST['password'])&&(!empty($_POST['confirm_password'])))) {
        $error['confirm_password'] = "Mật khẩu không giống nhau"; 
    }

    $check_valid_email = "/[^\s]+[@]{1}+[^\s]+/";

    if (!empty($_POST['email'])) {
        $check = (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
        if ($check) {
            $error['email'] = "Hãy nhập đúng định dạng email";
        }
    } else {
        $error['email'] = "Hãy nhập email";
    }

    if (isset($_POST['login'])) {
        header("Location:../view/login.php");
    }

    if (empty($error)) {
        register($_POST['name'],$_POST['email'],$_POST['password']);
        header("Location:../view/register_complete.php");
        exit();
    }
}