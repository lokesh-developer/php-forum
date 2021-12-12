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

    <title>Hello, world!</title>
</head>

<body>

    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>
    <div class="container my-4">
        <div class="dropdown float-right my-3 mr-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More Options
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Create group</a>
                <a class="dropdown-item" href="#">Delete group</a>
                <a class="dropdown-item" href="#">Mute</a>
            </div>
        </div>
        <h1>Your Friends</h1>

        <div class="list-group ml-4 my-4">
            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-3"><img src="images/group-default.png" width="50px" height="50px"
                            style="border-radius: 100%;" class="align-self-start mr-3" alt="..."> List group item
                        heading</h5>
                    <small>
                        <button type="button" class="btn btn-primary">
                            Notifications <span class="badge badge-light">4</span>
                        </button>
                    </small>
                </div>
                <p class="mb-2">Group Owner not added description yet.</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-3"><img src="images/group-default.png" width="50px" height="50px"
                            style="border-radius: 100%;" class="align-self-start mr-3" alt="..."> List group item
                        heading</h5>
                    <small>
                        <button type="button" class="btn btn-primary">
                            Notifications <span class="badge badge-light">4</span>
                        </button>
                    </small>
                </div>
                <p class="mb-1">Group Owner not added description yet.</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-3"><img src="images/group-default.png" width="50px" height="50px"
                            style="border-radius: 100%;" class="align-self-start mr-3" alt="..."> List group item
                        heading</h5>
                    <small>
                        <button type="button" class="btn btn-primary">
                            Notifications <span class="badge badge-light">4</span>
                        </button>
                    </small>
                </div>
                <p class="mb-1">Group Owner not added description yet.</p>
            </a>
        </div>
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
    <script src="js/darkmode.js"></script>
</body>

</html>