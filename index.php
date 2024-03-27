<?php
$title = 'Posts - G&S IT News';

// CONTAINER
require_once './components/partials/top.php';
require_once './components/partials/header.php';
require_once './repositories/PostRepository.php';
require_once './hooks/handlePosts.php';

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