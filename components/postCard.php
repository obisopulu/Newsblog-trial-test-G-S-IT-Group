<?php
require_once './repositories/PostRepository.php';

$posts = $postRepository->getPosts();
$i = 0;
?>

<div class="post-card-container">
<?php foreach ($posts as $post) { ?>
    <div class="post-card<?php if($i === 0 && $page_number === 1){ echo ' mobile';}  ?>">
        <div class="post-card-body">
            <img class="post-card-image" src="<?=  $post['thumbnail']; ?>" alt="">
            <div class="post-card-title">
            <?=  $post['headline']; ?>
            </div>
            <p class="post-card-text">
                <?php
                    //substr($post['article'], 0, 130) . '...' ; 
                ?>
            </p>
        </div>
        <div class="post-card-button">
            <a href="post.php?id=<?=  $post['id']; ?>" class="btn">Weiterlesen</a>
        </div>
    </div>
<?php $i++;} ?>
</div>