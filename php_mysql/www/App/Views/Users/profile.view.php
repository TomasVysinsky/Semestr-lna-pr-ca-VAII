<?php
$layout = 'auth';

use App\Models\User;
/** @var User $data */
/** @var \App\Core\IAuthenticator $auth */
?>
<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="card mb-4">
        <div class="card-body text-center">
            <h5 class="my-3"><?php echo $auth->getLoggedUserName() ?></h5>
            <p class="text-muted mb-1">Email: <?php echo $data->getEmail() ?></p>
            <p class="text-muted mb-1">Meno:
                <?php if ($data->getName() == null)
                {
                    echo "nie je zadane";
                } else {
                    echo $data->getName();
                }
                ?>
            </p>
            <p class="text-muted mb-4">Priezvisko:
                <?php if ($data->getSurename() == null)
                {
                    echo "nie je zadane";
                } else {
                    echo $data->getSurename();
                }
                ?>
            </p>
            <div class="d-flex justify-content-center mb-2">
                <a class="btn btn-success" href="?c=users&a=edit">Edit</a>
                <a class="btn btn-danger ms-1" href="?c=users&a=delete">Delete</a>
            </div>
        </div>
    </div>
</div>
