<?php
$showAlert = false;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Chat rooms</title>
</head>

<body>

    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_sidebar.php'; ?>

    <div class="container" style="margin-left: 25%; width:auto;">
        <?php
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
            $method = $_SERVER['REQUEST_METHOD'];
            if ($method == 'POST') {
                $gp_title = $_POST['chatname'];
                $gp_desc = $_POST['chatdesc'];
                $userId = $_POST['user'];
                $sql = "INSERT INTO `group` (`group_name`, `group_description`, `user_id`, `date_stamp`) VALUES ('$gp_title', '$gp_desc', '$userId', CURRENT_TIMESTAMP)";
                $result = mysqli_query($conn, $sql);
                $showAlert = true;
            } else {
                $showError = true;
            }
            if ($showAlert) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Chat room created successfully.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
            }
        ?>
        <div class="jumbotron jumbotron-fluid py-0 navbar-dark my-4 inverted text-white"
            style="background-color: #3097e6; display: none; margin-left: 25%; width:auto;">
            <button type="button" class="btn btn-light my-3 mr-3 float-right" id="close">&times;</button>
            <div class="container">

                <?php


                echo '<form action="' . $_SERVER["PHP_SELF"] . '" method="post" >
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" name="chatname" id="chatname"
                                        placeholder="Unique chat room name" aria-label="Unique chat room name"
                                        aria-describedby="basic-addon1">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Ensure to write a unique chat room
                                    name</small>
                            </div>
                            <input type="hidden" name="user" value="' . $_SESSION['sno'] . '">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Write for what this chat room is about.</span>
                                    </div>
                                    <textarea class="form-control" name="chatdesc" id="chatdesc"
                                        aria-label="With textarea"></textarea>
                                </div>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" onclick="$(this).is(" :checked") &&
                                    $("#checked-a").slideDown("slow") || $("#checked-a").slideUp("slow");" id="ifChecked">
                                <label class="form-check-label" for="ifChecked">Private</label>
                            </div>
                            <div class="form-group" style="display: none;" id="checked-a">
                                <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary my-4">Create</button>
                            </form>';
            } else {
                echo '<p class="py-4">Login to create a room</p>';
            }
                ?>
            </div>
        </div>
    </div>
    <div class="container my-4" style="margin-left: 25%; width:auto;">
        <div class="dropdown float-right mt-2">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                More Options
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <button class="dropdown-item" id="create">Create room</button>
                <button class="dropdown-item" id="created">Your created rooms</button>
            </div>
        </div>
        <h3>Now chatting</h3>
        <?php
        $sql = "SELECT * FROM `group`";
        $result = mysqli_query($conn, $sql);
        $noRooms = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $group_nam = $row['group_name'];
            $id = $row['group_id'];
            $date = $row['date_stamp'];
            $noRooms = false;
            $group_desc = $row['group_description'];
            $user_id = $row['users_id'];
            $sql2 = "SELECT users_name FROM `users` WHERE users_id = '$user_id'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
            echo '<div class="list-group my-4">
                <div href="#" class="list-group-item list-group-item-action navbar-dark inverted text-white" style="background-color: #3097e6;">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-3"><img src="images/group-default.png" width="50px" height="50px" style="border-radius: 100%;" class="align-self-start mr-3" alt="...">' . $group_nam . '</h5>
                    </div>
                    <p class="mb-2">' . $group_desc . '</p>
                    <small>host: @' . $row2['users_name'] . '&diams;on ' . $date . '</small>
                    <div style="right: 40px; top: 30px;" class="position-absolute">
                <a href="#" class="btn btn-light d-inline ml-2">Join</a>
                </div>
                </div>';
        }
        if ($noRooms) {
            echo '<div class="alert alert-light" role="alert">
                No room be the first one to create a room.
            </div>';
        }
        ?>
    </div>
    <div class="container">
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/chat_room.js"></script>
    <script src="js/darkmode.js"></script>
</body>

</html>