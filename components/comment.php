<?php
include_once './repositories/CommentRepository.php';
require_once './repositories/UserRepository.php';

$comments = $commentRepository->findComments(['post_id' => $_GET['id']]);
?>

<div class="comment-container">
        <h2 class="">
            Comments
        </h2>

<?php foreach ($comments as $comment) { ?>
    <div class="comment">
        <div>
            <div class="comment-author">
                <span>
                    <?php
                        $user = $userRepository->getUser($comment['user_id']);
                        echo $user->name; 
                    ?>
                </span>
                <?php 
                    if($comment['user_id'] == $_SESSION['user_id']){
                ?>
                    <button class="delete-btn">
                        x
                    </button>
                <?php } ?>
            </div>
            <div class="comment-date">
            <?=  date_format(date_create($comment['created_at']), "d. M Y"); ?>
            </div>
            <p class="comment-content">
                <?=  $comment['comment']; ?>
            </p>
        </div>
    </div>
<?php } ?>
</div>