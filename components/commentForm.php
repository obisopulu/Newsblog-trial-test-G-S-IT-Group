<?php
include_once './repositories/CommentRepository.php';
$_SESSION['user_id'] = 1;
if( isset($_POST['comment']) )
{
    $commentRepository->addComment($_POST);
}
?>

<form class="post-comment-form" <?= FORM_ATTRIB ?>>
    <label for="message" class="post-label">Leave a comment</label>
    <textarea required id="message" rows="4" name="comment" class="post-comment" placeholder="..."></textarea>
    <input type="hidden" readonly name="user_id" value="<?= $_SESSION['user_id'] ?>">
    <input type="hidden"  name="post_id" value="<?= $_GET['id'] ?>">
    <input type="submit" value="Submit" class="post-submit">
</form>