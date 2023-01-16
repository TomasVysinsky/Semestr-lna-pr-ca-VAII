<?php
$layout = 'brands';

use App\Models\Post;
/** @var Post[] $data */
/** @var \App\Core\IAuthenticator $auth */
$userAll = \App\Models\User::getAll();
//$user = \App\Models\User::getOne($auth->getLoggedUserId());
?>
<div class="text-center">
    <a href="?c=posts&a=create" class="btn btn-dark" style="margin-top: 10px">Create post</a>
</div>
<?php
foreach ($data as $post)
{
    if ($post->getUsersUsername() == $auth->getLoggedUserName())
    {
?>
<div class="container">
    <div class="row">
        <div class="offset-0 offset-sm-0 offset-md-1 offset-lg-3 col-12 col-sm-12 col-md-10 col-lg-6">
            <div class="card my-3"> <!--style="width: 30rem;"-->
            <?php if ($post->getImg()) { ?>
                <img src="<?php echo $post->getImg()?>" class="card-img-top" alt="...">
            <?php } ?>
            <div class="card-body">
                <h5 class="card-title text-start fs-5">-><?php echo $post->getUsersUsername() ?></h5>
                <?php if ($post->getText()) { ?>
                    <p class="card-text"><?php echo $post->getText()?></p>
                <?php } ?>
                <a href="?c=posts&a=delete&id=<?php echo $post->getId() ?>" class="btn btn-danger">Delete</a>
                <a href="?c=posts&a=edit&id=<?php echo $post->getId() ?>" class="btn btn-success">Edit</a>
                <a href="?c=posts&a=like&id=<?php echo $post->getId() ?>" class="btn btn-primary">
                    <?php echo count($post->getLikes()) ?> Likes
                </a>
            </div>
        </div>
        </div>
    </div>
</div>

<?php }} ?>