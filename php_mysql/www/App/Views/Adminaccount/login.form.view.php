<?php
$layout = 'auth';
/** @var Array $data */
?>
<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Prihlásenie</h5>
                    <div class="text-center text-danger mb-3">
                        <?= @$data['message'] ?>
                    </div>
                    <form class="form-signin" method="post" action="?c=adminaccount&a=login">
                        <div class="mb-3">
                            <!--<label for="exampleInputEmail1" class="form-label">Email address</label>-->
                            <!--input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"-->
                            <input name="login" type="text" id="login" class="form-control" placeholder="Login"
                                   required autofocus>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="password" type="password" id="password" class="form-control"
                                   placeholder="Password" required>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-warning" type="submit" name="submit">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
