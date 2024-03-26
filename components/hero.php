<?php
require_once './repositories/PostRepository.php';

$post = $postRepository->getLatestPost();

?>

<div class="hero-card-container">
    <div class="hero-card desktop<?php if($page_number > 1){ echo ' hide';}  ?>">
        <img class="hero-image" src="<?=  $post->thumbnail; ?>" alt="">
        <div class="hero-body">
            <div class="hero-title">
            <?=  $post->headline; ?>
            </div>
            <p class="hero-text">
            <?=  substr($post->article, 0, 200) . '...' ; ?>
            </p>
            <div class="hero-button">
                <a href="post.php?id=<?=  $post->id; ?>" class="btn">Weiterlesen</a>
            </div>
        </div>
    </div>
</div>