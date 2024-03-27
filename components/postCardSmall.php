<?php
require_once './repositories/PostRepository.php';

$posts = $postRepository->findPosts(['user_id' => $_SESSION['user_id']]);

?>

<div class="post-small-container">
        <h2 class="">
            Your blog posts
        </h2>

<?php foreach ($posts as $post) { ?>
    <a href="post.php?id=<?=  $post['id']; ?>" class="post-small-linker">
        <div class="post-small-card desktop<?php if($page_number > 1){ echo ' hide';}  ?>">
            <img class="post-small-image" src="<?=  imgPipe($post['thumbnail']); ?>" alt="">
            <div class="post-small-body">
                <div class="post-small-title">
                <?=  substr($post['article'], 0, 60) . '...' ; ?>
                </div>
            </div>
        </div>
    </a>
<?php } ?>

</div>