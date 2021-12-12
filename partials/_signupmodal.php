<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-white" style="background-color: #3097e6;">
                <h5 class="modal-title" id="signupModalLabel">Signup to use friends forum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="partials/_signup.php" method="post">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col">
                            <label for="firstname">First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control">
                        </div>
                        <div class="col">
                            <label for="lastname">Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control">
                        </div>
                    </div></br>
                    <label for="username">Choose a unique username</label>
                    <div class="input-group mb-3">
                        <div class="input-group-postpend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" name="username" id="username"
                            aria-describedby="basic-addon1">
                    </div>
                    <label for="mobno">Mobile Number</label>
                    <div class="input-group input-group-default mb-3">
                        <div class="input-group-postpend">
                            <span class="input-group-text" id="inputGroup-sizing-default">+91</span>
                        </div>
                        <input type="number" name="mobno" id="mobno" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div></br>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" name="cpassword" id="cpassword" class="form-control" id="cpassword">
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #3097e6;">
                    <button type="button" class="btn btn-outline-danger text-white" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-light">SignUp</button>
                </div>
            </form>
        </div>
    </div>
</div>