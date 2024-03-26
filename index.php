<?php
$title = 'G&S News - The Latest in Technology, Science, Culture and Business';
$post_count = 4;
$page_number = 1;

// CONTAINER
require_once './components/partials/top.php';
require_once './components/partials/header.php';

// CONTENT  
include_once './components/hero.php';
include_once './components/postCard.php';
include_once './components/paginator.php';

// END CONTAINER
require_once './components/partials/footer.php';
require_once './components/partials/end.php';
?>

<script>
    updateTitle(<?= $title ?>)
</script>