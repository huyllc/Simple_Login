<?php
    include "../common/connect.php";

    function checklogin($username, $password) 
    {
        global $conn;
        $statement = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $statement->execute([$username]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);
    
        if ($user && ($password == $user['password'])) {
            return true;
        } else {
            return false; 
        }
    }