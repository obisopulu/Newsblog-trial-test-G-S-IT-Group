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
        $the_table = 'users';
        include_once './components/table.php';
        
?>
    </div>
<?php
// END CONTAINER
require_once './components/partials/footer.php';
require_once './components/partials/end.php';
?>