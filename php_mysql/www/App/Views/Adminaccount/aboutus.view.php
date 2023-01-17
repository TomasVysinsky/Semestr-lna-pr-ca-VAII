<?php
$layout = 'admin';
?>
<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="card mb-4">
        <div class="card-body text-center">
            <p class="text-center text-wrap fs-2 fw-bold nh" style="color: black"><?php echo \App\Models\Title::getOne(3)->getTitle() ?></p>
            <p class="text-center text-wrap fs-5 nh" style="color: black">
                <?php echo \App\Models\Title::getOne(3)->getText() ?>
            </p>
            <a href="?c=adminaccount&a=edit&id=3" class="btn btn-success">Edit</a>
        </div>
    </div>
</div>
