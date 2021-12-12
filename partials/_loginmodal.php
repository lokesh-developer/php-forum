<?php

?>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content inverted">
            <div class="modal-header text-white" style="background-color: #3097e6;">
                <h5 class="modal-title" id="loginModalLabel">Login to Infity</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <form action="/fforum/partials/_login.php" method="post">
                <div class="modal-body mt-3 pt-0">
                    <div class="form-group">
                        <label for="login">Email address | Username</label>
                        <input type="text" class="form-control" id="login" name="login" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="loginPass">Password</label>
                        <input type="password" class="form-control" id="loginPass" name="loginPass">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #3097e6;">
                    <button type="button" class="btn btn-outline-danger text-white" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-light">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
$("#foo").change(function() {

    var ischecked = $(this).is(':checked');
    if (ischecked) {
        $("#checked-a").fadeIn(200);
    } else {
        $("#checked-a").fadeOut(200);
    }

});
</script>