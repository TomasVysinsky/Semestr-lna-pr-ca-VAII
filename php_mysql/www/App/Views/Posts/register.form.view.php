<?php
$layout = 'auth';
?>
<!--
<form method="post" action="?c=posts&a=store">
    <?php /* /** @var \App\Models\Post $data */
    /*if ($data != null && $data->getId()) { ?>
        <input type="hidden" name="id" value="<?php echo $data->getId() ?>">
    <?php } ?>
    <label>
        Text:
        <input type="text" name="text" <?php if ($data != null) { ?>value="<?php echo $data->getText() ?>" <?php } */ ?>>
        <input type="submit" value="Odoslat">
    </label>
</form>
-->

<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">New Post</h5>
                    <div class="text-center text-danger mb-3">
                        <?php //= @$data['message'] ?>
                    </div>
                    <form class="form-signin" method="post" action="?c=posts&a=register" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Text of the post</label>
                            <textarea name="obsah" id="obsah" class="form-control" type="text" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Picture</label>
                            <input type="file" name="img">
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
