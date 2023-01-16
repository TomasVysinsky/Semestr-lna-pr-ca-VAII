<?php
use App\Models\Post;
/** @var Post[] $data */
/** @var \App\Core\IAuthenticator $auth */
if (!$auth->isLogged()) {
?>
<div class="menu-node main-node balance-background">
    <p class="text-center text-wrap fs-1 fw-bold nh">Welcome</p>
    <p class="text-center text-wrap fs-2 nh">
        Welcome to the homepage of our webside. We are social site for unite of all JDM lovers.
        <br/>Please feel welcomed and enjoy the community.
    </p>
</div>
<div class="menu-node invite-node balance-background">
    <p class="text-center text-wrap fs-1 fw-bold nh">Share your Japanese dream with us!</p>
</div>
<?php } else {
foreach ($data as $post)
    {?>
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
                            <input type="hidden" name="origin" id="origin" value="home">
                            <a href="?c=posts&a=like&id=<?php echo $post->getId() ?>" class="btn btn-primary">
                                <?php echo count($post->getLikes()) ?> Likes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php }
} ?>