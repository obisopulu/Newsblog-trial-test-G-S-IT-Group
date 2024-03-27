<?php
require_once './repositories/PostRepository.php';
require_once './repositories/CommentRepository.php';
require_once './repositories/UserRepository.php';

//$_SESSION['user_id'] = 1;


    
if ($the_table == 'post'){

    if(isset($_GET['id']) && $_GET['id'] > 0){
        if( $postRepository->removePost(intval($_GET['id'])) > 0 ){
            nav("?");
        };
    }

    $table_ths = ['Headline', 'Article', 'Date', 'Action'];
    $table_tds = $postRepository->findPosts(['user_id' => $_SESSION['user_id']]);
    ?>
        <div class="table-container">
            Posts
            <table class="table-t">
                <thead class="table-thead">
                    <tr>
                        <?php foreach ($table_ths as $table_th) { ?>
                            <th class="table-th">
                                <?= $table_th  ?>
                            </th>
                        <?php }  ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($table_tds as $table_td) { ?>
                        <tr class="table-tr">
                            <td class="table-td">
                                <?= substr($table_td['headline'], 0, 40) . '...' ;  ?>
                            </td>
                            <td class="table-td">
                                <?= substr($table_td['article'], 0, 30) . '...' ;  ?>
                            </td>
                            <td class="table-td">
                                <?= $table_td['created_at']  ?>
                            </td>
                            <td class="table-td-action">
                                <button class="delete-btn" onclick="confirmDelete(<?= $table_td['id'] ?>)">
                                    x
                                </button>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    <?php
}
if ($the_table == 'comment'){

    if(isset($_GET['id']) && $_GET['id'] > 0){
        if( $commentRepository->removeComment(intval($_GET['id'])) > 0 ){
            nav("?");
        };
    }
    $table_ths = ['Post', 'Comment', 'Date', 'Action'];
    $table_tds = $commentRepository->findComments(['user_id' => $_SESSION['user_id']]);
    ?>
        <div class="table-container">
            Comments
            <table class="table-t">
                <thead class="table-thead">
                    <tr>
                        <?php foreach ($table_ths as $table_th) { ?>
                            <th class="table-th">
                                <?= $table_th  ?>
                            </th>
                        <?php }  ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($table_tds as $table_td) { ?>
                        <tr class="table-tr">
                            <td class="table-td">
                                <?= $table_td['post_id'];  ?>
                            </td>
                            <td class="table-td">
                                <?= substr($table_td['comment'], 0, 50) . '...' ;  ?>
                            </td>
                            <td class="table-td">
                                <?= $table_td['created_at']  ?>
                            </td>
                            <td class="table-td-action">
                                <button class="delete-btn" onclick="confirmDelete(<?= $table_td['id'] ?>)">
                                    x
                                </button>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    <?php
}

if ($the_table == 'users'){

    if(isset($_GET['id']) && $_GET['id'] > 0){
        if($_GET['can'] == 'post'){
            if( $userRepository->updateRole(['role' => 'POST'], intval($_GET['id'])) ){
                nav("?");
            };
        }
        if($_GET['can'] == 'comment'){
            if( $userRepository->updateRole(['role' => 'COMMENT'], intval($_GET['id'])) ){
                nav("?");
            };
        }
    }

    $table_ths = ['Name', 'Email', 'Role', 'Date', 'Action'];
    $table_tds = $userRepository->getUsers();
    ?>
        <div class="table-container">
            Users
            <table class="table-t">
                <thead class="table-thead">
                    <tr>
                        <?php foreach ($table_ths as $table_th) { ?>
                            <th class="table-th">
                                <?= $table_th  ?>
                            </th>
                        <?php }  ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($table_tds as $table_td) { ?>
                        <tr class="table-tr">
                            <td class="table-td">
                                <?= $table_td['name'];  ?>
                            </td>
                            <td class="table-td">
                                <?= $table_td['email']  ?>
                            </td>
                            <td class="table-td">
                                <?= $table_td['role']  ?>
                            </td>
                            <td class="table-td">
                                <?= $table_td['created_at']  ?>
                            </td>
                            <td class="table-td-action">
                                <button class="delete-btn blue" onclick="confirmCanPost(<?= $table_td['id'] ?>)">
                                    can post
                                </button>
                                <button class="delete-btn green" onclick="confirmCanComment(<?= $table_td['id'] ?>)">
                                    can commment
                                </button>
                            </td>
                        </tr>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    <?php
}
?>