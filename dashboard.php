<?php
$title = 'G&S News - The Latest in Technology, Science, Culture and Business';
$post_count = 4;
$page_number = 1;

// CONTAINER
require_once './components/partials/top.php';
require_once './components/partials/header.php';

require_once './repositories/PostRepository.php';

    include_once './components/AdminNav.php';
?>
    <div class="dashboard-container">
<?php

        include_once './components/newPost.php';
    ?>
        <div>
        <?php
            include_once './components/postCardSmall.php';
            //include_once './components/comment.php';

        ?>
        </div>
    </div>
<?php
// END CONTAINER
require_once './components/partials/footer.php';
require_once './components/partials/end.php';
?>