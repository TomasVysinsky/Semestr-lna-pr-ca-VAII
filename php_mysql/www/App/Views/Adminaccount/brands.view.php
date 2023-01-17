<?php
$layout = 'admin';
/** @var \App\Models\Brand[] $data */
?>
<div class="text-center">
    <a href="?c=brands&a=create" class="btn btn-dark" style="margin-top: 10px">Create new brand card</a>
</div>
<p class="text-center text-wrap fs-2 fw-bold nh mt-1" style="color: black">Most popular JDM brands</p>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-xl-5 lg-4 list-of-brands">
    <?php foreach ($data as $brand) { ?>
        <div class="col">
            <div class="card h-100">
                <img src="<?php echo $brand->getLogo() ?>" class="card-img-top" alt="...">
                <a href="?c=brands&a=delete&id=<?php echo $brand->getId() ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
    <?php } ?>
</div>
