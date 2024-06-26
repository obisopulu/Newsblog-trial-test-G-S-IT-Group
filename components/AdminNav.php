<?php

    $user_role = $_SESSION['user']->role;
    $user_id = $_SESSION['user']->id;

?>

<div style="border-top-width: 1px; border-color: #E5E7EB; width: 100%; height: 2rem; background-color: #ffffff; margin-top:-50px">
    <div style="display: flex; justify-content: center; max-width: 32rem; height: 100%; font-weight: 500; margin: 0 auto">
        <a href="dashboard.php" style="display: block">
            <button type="button" style="display: inline-flex; padding-left: 1.25rem; padding-right: 1.25rem; flex-direction: column; justify-content: center; align-items: center; border-color: #E5E7EB;">
                <span style="font-size: 0.875rem; line-height: 1.25rem; color: #6B7280; ">Home</span>
            </button>
        </a>
        <?php if($user_role === 'POST'){ ?>
            <a href="admin-posts.php" style="display: block">
                <button type="button" style="display: inline-flex; padding-left: 1.25rem; padding-right: 1.25rem; flex-direction: column; justify-content: center; align-items: center; border-color: #E5E7EB;">
                    <span style="font-size: 0.875rem; line-height: 1.25rem; color: #6B7280;">Posts</span>
                </button>
            </a>
        <?php } ?>
        <a href="admin-comments.php" style="display: block">
            <button type="button" style="display: inline-flex; padding-left: 1.25rem; padding-right: 1.25rem; flex-direction: column; justify-content: center; align-items: center; border-color: #E5E7EB;">
                <span style="font-size: 0.875rem; line-height: 1.25rem; color: #6B7280;">Comments</span>
            </button>
        </a>
        <?php if($user_id == 1){ ?>
            <a href="admin-users.php" style="display: block">
                <button type="button" style="display: inline-flex; padding-left: 1.25rem; padding-right: 1.25rem; flex-direction: column; justify-content: center; align-items: center; border-color: #E5E7EB;">
                    <span style="font-size: 0.875rem; line-height: 1.25rem; color: #6B7280;">Users</span>
                </button>
            </a>
        <?php } ?>
    </div>
</div>