<?php
session_start();
echo '<nav class=" navbar navbar-expand-lg position-sticky navbar-dark inverted text-white" style="width:100%; background-color: #3097e6;">
  <a class="navbar-brand" href="index.php">Infity</a>
  <div class="d-flex justify-content-end" style="width:100%;">';
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
  $user_id = $_SESSION['sno'];
  $sql2 = "SELECT users_name FROM `users` WHERE users_id = '$user_id'";
  $result2 = mysqli_query($conn, $sql2);
  $row2 = mysqli_fetch_assoc($result2);
  echo '<form class="form-inline my-2 my-lg-0">
    <div class="spinner-grow text-light" style="width:45px; height:45px;" role="status">
      <span class="sr-only">Loaded</span>
    </div>
    <a href="editprofile.php?user_id=' . $user_id . '" style="border-radius: 100%; position: absolute; right:400px;"><button type="button" style="border-radius: 100%;" class="btn btn-outline-dark setprofile p-0" id="theView"><img src="images/profile.webp" width="35px" height="35px" style="border-radius: 100%;""></button></a>
    <input class="form-control ml-sm-2 mr-sm-2" type="search" placeholder="Search" style="margin-bottom: 0px;" aria-label="Search">
    <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
    <div class="profileSetting">
      <a href="partials/_logout.php"class="btn btn-outline-light ml-2">Log Out</a>
    </div>
</form>';
} else {
  echo '<button class="btn btn-light ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
<button class="btn btn-outline-light ml-2" data-toggle="modal" data-target="#signupModal">Signup</button>';
}
echo '</div>
</nav>';

include 'partials/_loginmodal.php';
include 'partials/_signupmodal.php';
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
  echo '<div class="alert alert-success fixed-bottom alert-dismissible fade show"  style="width:100%; margin-bottom: 0px;" role="alert">
    <strong>Success!</strong> Your account has been created successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';
}
if (isset($_GET['error'])) {
  echo '<div class="alert alert-danger fixed-bottom alert-dismissible fade show"  style="width:100%; margin-bottom: 0px;" role="alert">
    <strong>Oops!</strong> ' . $_GET['error'] . '.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';
}
if (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "Logged in successfully") {
  echo '<div class="alert alert-success fixed-bottom alert-dismissible fade show" style="width:100%; margin-bottom: 0px;" role="alert">
    <strong>Success!</strong> ' . $_GET['loginsuccess'] . '.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';
}
if (isset($_GET['loginfailure'])) {
  echo '<div class="alert alert-danger fixed-bottom alert-dismissible fade show" style="width:100%; margin-bottom: 0px;" role="alert">
    <strong>Oops!</strong> ' . $_GET['loginfailure'] . '.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>';
}
// <button class="btn btn-light" id="darkmode">Dark mode</button>
// <button class="btn btn-light" id="lightmode" style="display: none;">Light mode</button>