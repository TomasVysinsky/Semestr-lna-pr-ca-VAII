<?php
$layout = 'admin';

/** @var \App\Core\IAuthenticator $auth */
$allAdmins = \App\Models\Adminaccount::getAll();
?>
<div class="text-center">
    <a href="?c=adminaccount&a=create" class="btn btn-dark" style="margin-top: 10px">Create admin account</a>
</div>
<?php
foreach ($allAdmins as $admin)
{
    if ($admin->getUsername() != "admin")
    {
        ?>
        <div class="container">
            <div class="row">
                <div class="offset-0 offset-sm-0 offset-md-1 offset-lg-3 col-12 col-sm-12 col-md-10 col-lg-6">
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-start fs-5"><?php echo $admin->getUsername() ?></h5>
                            <a href="?c=adminaccount&a=delete&id=<?php echo $admin->getId() ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }} ?>
