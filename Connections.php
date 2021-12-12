<?php
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

    <title>Connect</title>
</head>

<body>

    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_sidebar.php'; ?>
    <div class="container my-4" style="margin-left: 20%;">
        <?php
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
            echo '<h1>Here are some connections:</h1><br>';
            $sqlk = "SELECT * FROM `users`";
            $result = mysqli_query($conn, $sqlk);
            while ($rho = mysqli_fetch_assoc($result)) {
                $first = $rho['first_name'];
                $last = $rho['last_name'];
                $usernam = $rho['users_name'];
                $user_id = $rho['users_id'];
                echo '<div class="media ml-4 my-4">
                            <img class="mr-3" src="images/profile.webp" width="100px" height="100px" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">' . $first . ' ' . $last . '</h5>
                                <p>Gender: male/female/rather not to say</p>
                                <button class="btn btn-primary">Connect</button>
                            </div>
                            </div>';
            }
        }
        ?>
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
    <script src="js/darkmode.js"></script>
</body>

</html>