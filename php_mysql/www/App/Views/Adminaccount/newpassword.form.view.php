<?php
$layout = 'admin';
/** @var Array $data */
?>

<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Zmena Hesla</h5>
                    <div class="text-center text-danger mb-3">
                        <?= @$data['message'] ?>
                    </div>
                    <form class="form-signin" method="post" action="?c=adminaccount&a=newpassword">

                        <div class="form-label-group mb-3">
                            <input name="oldpassword" type="password" id="oldpassword" class="form-control"
                                   placeholder="Password" required>
                        </div>
                        <div class="form-label-group mb-3">
                            <input name="password" type="password" id="password" class="form-control"
                                   placeholder="Password" required>
                        </div>
                        <div class="form-label-group mb-2">
                            <input name="confPassword" type="password" id="confPassword" class="form-control"
                                   placeholder="Confirm password" required>
                        </div>
                        <div class="rating mb-3"></div>
                        <div class="text-center">
                            <button id="submit" class="btn btn-warning" type="submit" name="submit" disabled>Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
