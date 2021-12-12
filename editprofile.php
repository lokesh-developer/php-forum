<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>FForum - Friends forum</title>
</head>

<body>

    <?php include 'partials/_dbconnect.php'; ?>
    <div class="container my-4">
        <h1><span class="change">View</span> profile:</h1>
        <?php
        $user_id = $_SESSION['sno'];
        $sqlEdit = "SELECT users_id, first_name, last_name, users_name, user_pass, users_email, mobile_number FROM `users` WHERE users_id = '$user_id'";
        $result = mysqli_query($conn, $sqlEdit);
        $RRow = mysqli_fetch_assoc($result);
        $users = $RRow['users_id'];
        if ($users = $_SESSION['sno']) {
            echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">
                <div class="form-row">
                    <figure class="figure">
                        <img src="images/profile.webp" width="100px" height="100px" style="border: 2px solid #3097e6;">
                        <figcaption class="figure-caption">USER ID: #' . $_SESSION['sno'] . '</figcaption>
                    </figure>
                    <div class="mr-3">
                        <p class="text-center"></p>
                    </div>
                    <div class="col">
                        <label for="firstname">First Name</label>
                        <input type="text" name="fname" disabled id="fname" style="border: 1px solid #3097e6;" placeholder="' . $RRow['first_name'] . '" class="form-control">
                    </div>
                    <div class="col">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lname" id="lname" style="border: 1px solid #3097e6;" placeholder="' . $RRow['last_name'] . '" disabled class="form-control">
                    </div>
                </div></br>
                <label for="username">Choose a unique username</label>
                <div class="input-group mb-3">
                    <div class="input-group-postpend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" name="username" style="border: 1px solid #3097e6;" placeholder="' . $RRow['users_name'] . '" id="username" disabled
                        aria-describedby="basic-addon1">
                </div>
                <label for="mobno">Mobile Number</label>
                <div class="input-group input-group-default mb-3">
                    <div class="input-group-postpend">
                        <span class="input-group-text" id="inputGroup-sizing-default">+91</span>
                    </div>
                    <input type="number" name="mobno" id="mobno" style="border: 1px solid #3097e6;" placeholder="' . $RRow['mobile_number'] . '" class="form-control" disabled
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div></br>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" style="border: 1px solid #3097e6;" disabled id="email" placeholder="' . $RRow['users_email'] . '" disabled
                        aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="password">New password</label>
                    <input type="password" name="password" id="password" style="border: 1px solid #3097e6;" disabled class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="cpassword">Confirm new Password</label>
                    <input type="password" name="cpassword" id="cpassword" style="border: 1px solid #3097e6;" disabled class="form-control" id="cpassword">
                </div>
            <button type="button" id="edit" class="btn btn-primary">Edit profile</button>
            <button type="submit" id="save" class="btn btn-primary" style="display:none;">Save changes</button>
            <button type="button" id="home" class="btn btn-light"><a href="index.php">Back to home</a></button>
        </form>';
        } else {
            echo '<div class="mr-4">
                        <img src="images/profile.webp" width="100px" height="100px" style="border: 2px solid #3097e6;">
                    </div>';
        }
        ?>
    </div>
    </div>
    </div>
    </div>
    <!-- <?php include 'partials/_footer.php'; ?> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- <script src="js/darkmode.js"></script> -->
    <script>
    $('#edit').click(function() {
        $('#fname').prop('disabled', false);
        $('#lname').prop('disabled', false);
        $('#username').prop('disabled', false);
        $('#mobno').prop('disabled', false);
        $('#email').prop('disabled', false);
        $('#password').prop('disabled', false);
        $('#cpassword').prop('disabled', false);
        $('#save').css("display", "");
        $('#edit').css("display", "none")
        $()
    });
    </script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
<!-- , '#fname', '#', '#', '#', '#' -->