<?php
$title = 'Post - G&S IT News';
$post_count = 4;
$page_number = 1;

// CONTAINER
require_once './components/partials/top.php';
require_once './components/partials/header.php';

include_once './components/post.php';
include_once './components/commentForm.php';
include_once './components/comment.php';

// END CONTAINER
require_once './components/partials/footer.php';
require_once './components/partials/end.php';
?>