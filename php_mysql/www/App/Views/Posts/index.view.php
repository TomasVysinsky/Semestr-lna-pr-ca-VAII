<?php
$layout = 'brands';

use App\Models\Post;
/** @var Post[] $data*/
?>
<div class="text-center">
    <a href="?c=posts&a=create" class="btn btn-dark" style="margin-top: 10px">Create post</a>
</div>
<?php
foreach ($data as $post) {
?><div class="card my-3" style="width: 200px;">
    <?php if ($post->getImg()) { ?>
    <img src="<?php echo $post->getImg()?>" class="card-img-top" alt="...">
    <?php } ?>
    <div class="card-body">
        <!-- <h5 class="card-title">Card title</h5> -->
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
<?php } ?>