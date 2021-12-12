<?php
$showError = "Something went wrong";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include '_dbconnect.php';
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $user_email = $_POST['email'];
    $user_name = $_POST['username'];
    $mobile_number = $_POST['mobno'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    echo var_dump($mobile_number);
    echo var_dump($pass);
    echo var_dump($cpass);
    $exitSql = "SELECT * FROM `users` WHERE users_email = '$user_email' and users_name = '$user_name' and mobile_number='$mobile_number'";
    $result = mysqli_query($conn, $exitSql);
    $numRows = mysqli_num_rows($result);
    echo var_dump($exitSql);
    echo var_dump($result);
    echo var_dump($numRows);
    if ($numRows > 0) {
        $showError = "You can use your E-mail, Mobile number and User name only once";
        header("location: /fforum/index.php?signupsuccess=false&error=$showError");
    } else {
        if ($pass == $cpass) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sqli = "INSERT INTO `users` (`first_name`, `last_name`, `users_email`, `users_name`, `mobile_number`, `user_pass`, `time_stamp`) VALUES ('$first_name', '$last_name', '$user_email', '$user_name', '$mobile_number', '$hash', CURRENT_TIMESTAMP)";
            $results = mysqli_query($conn, $sqli);
            if ($results) {
                header("location: /fforum/index.php?signupsuccess=true");
                exit();
            }
        } else {
            $showError = "Password do not match";
        }
        header("location: /fforum/index.php?signupsuccess=false&error=$showError");
    }
}