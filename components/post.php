<?php
require_once './config/form.php';

require_once './repositories/PostRepository.php';
require_once './repositories/UserRepository.php';
include_once './repositories/CommentRepository.php';

require_once './hooks/handleComment.php';

$post = $postRepository->getPost($_GET['id']);
$user = $userRepository->getUser($post->user_id);

$title = $post->headline;

?>
<div class="container-post">
    <div class="post-title">
        <?=  $post->headline; ?>
    </div>
    <div class="post-author">
        by <?=  $user->name; ?> <br>
        <?=  date_format(date_create($post->created_at), "d. M Y"); ?>
    </div>

    <img class="post-image" src="<?=  imgPipe($post->thumbnail); ?>" alt="">

    <div class="post-content">
        <?=  $post->article; ?>
    </div>
</div>

<script>
    updateTitle(<?= $title ?>)
</script>