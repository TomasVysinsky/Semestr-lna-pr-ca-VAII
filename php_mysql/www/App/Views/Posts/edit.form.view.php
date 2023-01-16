<?php
$layout = 'auth';
/** @var \App\Models\Post $data */
?>

<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">New Post</h5>
                    <div class="text-center text-danger mb-3">
                        <?php //= @$data['message'] ?>
                    </div>
                    <form class="form-signin" method="post" action="?c=posts&a=store">
                        <input type="hidden" name="id" id="id" value="<?php echo $data->getId() ?>">
                        <!--<div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>-->
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Text of the post</label>
                            <textarea name="obsah" id="obsah" class="form-control" type="text" rows="3" required><?php echo $data->getText() ?></textarea>
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