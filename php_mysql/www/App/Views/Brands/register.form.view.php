<?php
$layout = 'admin';
/** @var Array $data */
?>

<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">New brand</h5>
                    <div class="text-center text-danger mb-3">
                        <?= @$data['message'] ?>
                    </div>
                    <form class="form-signin" method="post" action="?c=brands&a=register">
                        <div class="mb-3">
                            <input name="name" type="text" id="name" class="form-control" placeholder="Name of the brand"
                                   required autofocus>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="logo" type="text" id="logo" class="form-control"
                                   placeholder="Url to logo picture" required>
                        </div>
                        <div class="text-center">
                            <button id="submit" class="btn btn-warning" type="submit" name="submit">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
