<?php
$layout = 'admin';
/** @var \App\Models\Title $data */
?>

<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Title</h5>
                    <div class="text-center text-danger mb-3">
                        <?php //= @$data['message'] ?>
                    </div>
                    <form class="form-signin" method="post" action="?c=adminaccount&a=store">
                        <input type="hidden" name="id" id="id" value="<?php echo $data->getId() ?>">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <textarea name="nadpis" id="nadpis" class="form-control" rows="2"><?php echo $data->getTitle() ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Text of the post</label>
                            <textarea name="obsah" id="obsah" class="form-control" rows="3"><?php echo $data->getText() ?></textarea>
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
