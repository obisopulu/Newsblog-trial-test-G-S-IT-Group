<?php

    require_once './config/form.php';
    require_once './repositories/PostRepository.php';
    require_once './hooks/handleUpload.php';  
    
?>

<div class="container-new-post">
    <?php
        require_once './components/alert.php'; 
    ?>
    <form <?= Form::props('file') ?> >
        <h1 class="">
            Post new blog article
        </h1>

        <img class="new-post-image hide" src="./public/icons/newPost.svg" alt="">
        <input name="thumbnail" type="file" required accept="image/*" class="new-post-image-input">

        <div class="new-post-inpts">
            
            <label for="helper-text" class="new-post-label">Post Title</label>
            <input type="hidden" value="<?= $_SESSION['user_id'] ?>" name="user_id" readonly>
            <input type="text" value="" name="headline" required id="helper-text" class="new-post-title" placeholder="enter post title">
                    
            <label for="message" class="new-post-label">Your message</label>
            <textarea name="article" required id="message" rows="4" class="new-post-content" placeholder="write the blog content here"></textarea>
        <input type="submit" value="Submit" class="post-submit">

        </div>
    </form>
</div>