<?php
    include "../common/connect.php";

    function register($username, $email, $password) {
        global $conn;
        $date = new DateTime('NOW', new DateTimeZone('Asia/Ho_Chi_Minh')); 
        $convert = $date->format('Y-m-d H:i:s'); 
        $query = "insert into users (username, email, password, create_datetime) values (:username, :email, :password, :create_datetime)";
        $sth = $conn->prepare($query);
        $sth->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $password,
            ':create_datetime' => $convert
        ]);
        $sth->closeCursor();
        return true;
    }

    function check_name($username) 
    {
        global $conn;
        $statement = $conn->prepare("SELECT username FROM users WHERE username = ?");
        $statement->execute([$username]);

        if ($statement->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

?>

