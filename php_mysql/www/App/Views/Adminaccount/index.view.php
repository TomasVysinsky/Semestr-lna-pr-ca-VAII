<?php
$layout = 'admin';
/** @var \App\Core\IAuthenticator $auth */
?>
    <div class="menu-node main-node balance-background">
        <p class="text-center text-wrap fs-1 fw-bold nh"><?php echo \App\Models\Title::getOne(1)->getTitle() ?></p>
        <p class="text-center text-wrap fs-2 nh">
            <?php echo \App\Models\Title::getOne(1)->getText() ?>
        </p>
        <a href="?c=adminaccount&a=edit&id=1" class="btn btn-success">Edit</a>
    </div>
    <div class="menu-node invite-node balance-background">
        <p class="text-center text-wrap fs-1 fw-bold nh"><?php echo \App\Models\Title::getOne(2)->getTitle() ?></p>
        <p class="text-center text-wrap fs-2 nh">
            <?php echo \App\Models\Title::getOne(2)->getText() ?>
        </p>
        <a href="?c=adminaccount&a=edit&id=2" class="btn btn-success">Edit</a>
    </div>
