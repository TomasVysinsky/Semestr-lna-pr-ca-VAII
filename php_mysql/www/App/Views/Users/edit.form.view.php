<?php
$layout = 'auth';
/** @var \App\Models\User $data */
?>

<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="card mb-4">
        <div class="card-body text-center">
            <h5 class="my-3"><?php echo $data->getUsername() ?></h5>
            <form class="form-signin" method="post" action="?c=users&a=store">
                <div class="form-label-group mb-3">
                    <label for="email">Email address</label>
                    <input name="email" type="email" id="email" class="form-control"
                           placeholder="<?php echo $data->getEmail() ?>">
                </div>
                <div class="form-label-group mb-3">
                    <label for="name">First name</label>
                    <input name="name" type="text" id="name" class="form-control"
                           placeholder="nie je zadane";
                           value="<?php if ($data->getName() != null) {
                                       echo $data->getName();
                                   }
                                   ?>">
                </div>
                <div class="form-label-group mb-3">
                    <label for="surename">Surename</label>
                    <input name="surename" type="text" id="surename" class="form-control"
                           placeholder="nie je zadane"
                           value="<?php if ($data->getSurename() != null) {
                                       echo $data->getSurename();
                                   }
                                   ?>">
                </div>
                <div class="text-center">
                    <button class="btn btn-warning" type="submit" name="submit">Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>