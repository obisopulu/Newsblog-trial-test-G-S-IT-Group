<?php
require_once './repositories/PostRepository.php';

$comments = $postRepository->getPosts();

?>

<div class="post-card-container">
        <h2 class="">
            Comments
        </h2>

<?php foreach ($comments as $comment) { ?>
    <div class="comment">
        <div>
            <div class="comment-author">
                <?=  $comment['user']['name']; ?>
            </div>
            <div class="comment-date">
                <?=  date($comment['created_at'], "d. M Y"); ?>
            </div>
            <p class="comment-content">
                <?=  $comment['comment']; ?>
            </p>
        </div>
    </div>
<?php } ?>
</div>