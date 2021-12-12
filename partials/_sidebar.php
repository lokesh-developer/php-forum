<aside id="sidebar" style="background-color: #3097e6;">
    <div class="row mr-0">
        <div class="col-3 position-fixed" style="max-width: 20%;">
            <ul class="nav nav-tabs flex-column">
                <?php
                $sql = "SELECT * FROM `categories` ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $cate = $row['category_name'];
                    $id = $row['category_id'];
                    $desc = $row['category_description'];
                    echo '<li class="nav-item"><a class="nav-link" href="' . $cate . '">' . $cate . '</a></li>';
                    // echo '<div class="col-md-4 inverted">
                    //             <div class="card mt-4 navbar-light text-white" style="background-color: #3097e6; width: 18rem;" >
                    //             <img src="images/card-' . $id . '.jpg" class="card-img-top" alt="...">
                    //             <div class="card-body">
                    //                 <h5 class="card-title"><a class="text-white" href="' . $cate . '.php">' . $cate . '</a></h5>
                    //                 <p class="card-text">' . substr($desc, 0, 120) . '...</p>
                    //                 <a href="' . $cate . '.php" class="btn btn-light">View</a>
                    //             </div>
                    //         </div>
                    //     </div>';
                }
                ?>
                <br>
            </ul>
            <div class="ml-3">
                <br>

                <p style="color:#007bff;">Your groups : </p>
                <?php
                if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
                    echo '<div class="profiles">
                    <ul class="list-unstyled">
                        <li class="media">
                            <img src="images/group-default.png" class="mr-3" height="40px" width="40px" style="border-radius:100%;" alt="Profile picture">
                            <div class="media-body">
                                <a href=""><h5 class="mb-1">Lokesh</h5></a>
                                <span class="badge badge-success badge-pill">online</span>
                            </div>
                        </li>
                        <li class="media my-3">
                            <img src="images/group-default.png" class="mr-3" height="40px" width="40px" style="border-radius:100%;" alt="Profile picture">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Gunjan</h5>
                                <span class="badge badge-danger badge-pill">offline</span>
                            </div>
                        </li>
                    </ul>
                </div>';
                } else {
                    echo '<div class="alert alert-warning" role="alert">Login to see your connections</div>';
                }
                ?>
            </div>
        </div>
    </div>
</aside>