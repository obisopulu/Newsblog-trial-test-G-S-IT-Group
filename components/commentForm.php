<?php  

?>

<form class="post-comment-form" <?= Form::props() ?>>
    <label for="message" class="post-label">Leave a comment</label>
    <textarea required id="message" rows="4" name="comment" class="post-comment" placeholder="..."></textarea>
    <input type="hidden" readonly name="user_id" value="<?= $_SESSION['user_id'] ?>">
    <input type="hidden"  name="post_id" value="<?= $_GET['id'] ?>">
    <input type="submit" value="Submit" class="post-submit">
</form>