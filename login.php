<?php
$title = 'G&S News - The Latest in Technology, Science, Culture and Business';
$post_count = 4;
$page_number = 1;

// CONTAINER
require_once './components/partials/top.php';
require_once './components/partials/header.php';

require_once './repositories/PostRepository.php';

//$post = $postRepository->getPost($_GET['id']);
//dd($posts);

?>
<div class="login-container">

    <form class="login-form">
        <h2 class="">
            Login
        </h2>
        <div class="login-block">
            <label for="email" class="login-label">Your email</label>
            <input type="email" id="email" class="login-field" required />
        </div>
        <div class="login-block">
            <label for="password" class="login-block">Your password</label>
            <input type="password" id="password" class="login-field" required />
        </div>
        <input type="submit" value="Login" class="login-button" />
    </form>
    

    <form class="login-form">
        <h2 class="">
            Register
        </h2>
        <div class="login-block">
            <label for="name" class="login-label">Your name</label>
            <input id="name" class="login-field" required />
        </div>
        <div class="login-block">
            <label for="email" class="login-label">Your email</label>
            <input type="email" id="email" class="login-field" required />
        </div>
        <div class="login-block">
            <label for="password" class="login-label">Your password</label>
            <input type="password" id="password" class="login-field" required />
        </div>
        <div class="login-block">
            <label for="repeat-password" class="login-label">Repeat password</label>
            <input type="password" id="repeat-password" class="login-field" required />
        </div>
        <input type="submit" value="Register" class="login-button" />
    </form>



</div>
<?php
// END CONTAINER
require_once './components/partials/footer.php';
require_once './components/partials/end.php';
?>