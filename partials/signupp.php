<?php
$showError = "Some fields were empty try again";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require '_dbconnect.php';
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $user_email = $_POST['email'];
    $mobile_number = $_POST['mobno'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $exitSql = "SELECT * FROM `users` where user_email = '$user_email'";
    $result = mysqli_query($conn, $exitSql);
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {
        $showError = "Email already exists";
    } else {
        if ($pass == $cpass) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users`  (`first_name`, `last_name`, `user_email`, `mobile_number`, `user_pass`, `time_stamp`) VALUES ('$first_name', '$last_name', '$user_email', '$mobile_number', '$hash', CURRENT_TIMESTAMP)";
            $results = mysqli_query($conn, $sql);
            if ($results) {
                $showAlert = true;
                header("location: /fforum/index.php?signupsuccess=true");
            }
        } else {
            $showError = "Password do not match";
        }

        header("location: /fforum/index.php?signupsuccess=false&error=$showError");
    }
}