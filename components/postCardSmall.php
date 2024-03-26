<?php
require_once './repositories/PostRepository.php';

$posts = $postRepository->getPosts();

?>

<div class="post-small-container">
        <h2 class="">
            Your blog posts
        </h2>

<?php foreach ($posts as $post) { ?>
    <a href="#" class="post-small-linker">
        <div class="post-small-card desktop<?php if($page_number > 1){ echo ' hide';}  ?>">
            <img class="post-small-image" src="./public/uploads/Kununu-Award-30f3cc64.jpg" alt="">
            <div class="post-small-body">
                <div class="post-small-title">
                <?=  substr($post['article'], 0, 60) . '...' ; ?>
                </div>
            </div>
        </div>
    </a>
<?php } ?>

</div>