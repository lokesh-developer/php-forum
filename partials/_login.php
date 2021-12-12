<?php
$failure = "false";
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    include '_dbconnect.php';
    $email = $_POST['login'];
    $mobile = $_POST['login'];
    $username = $_POST['login'];
    $pass = $_POST['loginPass'];
    $sql = "SELECT * FROM `users` WHERE users_email = '$email' OR users_name = '$username'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if ($numRows == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row['user_pass'])) {
            $success = "Logged in successfully.";
            session_start();
            $_SESSION['loggedIn'] = true;
            $_SESSION['sno'] = $row['users_id'];
            $_SESSION['username'] = $username;
            $success = "Logged in successfully";
            header("location: /fforum/index.php?loginsuccess=$success");
            exit();
        } else {
            $failure = "The password you entered is wrong";
        }
    } else {
        $failure = "No such account found.";
    }
    header("location: /fforum/index.php?loginfailure=$failure");
}