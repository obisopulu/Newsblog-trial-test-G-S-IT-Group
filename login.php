<?php
$title = 'Log in - G&S IT News';
$formData_count = 4;
$page_number = 1;

// CONTAINER
require_once './components/partials/top.php';
require_once './components/partials/header.php';
require_once './config/form.php';
require_once './repositories/UserRepository.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once './hooks/handleLogin.php';
    include_once './hooks/handleRegister.php';
}
include_once './components/alert.php';
?>
<div class="login-container">

    <form class="login-form" <?= Form::props(); ?>>
        <h2 class="">
            Login
        </h2>
        <div class="login-block">
            <label for="email" class="login-label">Your email</label>
            <input type="email" name="email" id="email" value_="admin@test.com" class="login-field" required />
        </div>
        <div class="login-block">
            <label for="password" class="login-block">Your password</label>
            <input type="password" name="password" id="password" value_="admin" class="login-field" required />
        </div>
        <input type="submit" name="_submit" value="Login" class="login-button" />
    </form>


    <form class="login-form" <?= Form::props(); ?>>
        <h2 class="">
            Register
        </h2>
        <div class="login-block">
            <label for="name" class="login-label">Your name</label>
            <input type="text" name="name" value_="Test User" id="name" class="login-field" required />
        </div>
        <div class="login-block">
            <label for="email" class="login-label">Your email</label>
            <input type="email" name="email" value_="user@test.com" id="email" class="login-field" required />
        </div>
        <div class="login-block">
            <label for="password" class="login-label">Your password</label>
            <input type="password" name="password" value_="1234" id="password" class="login-field" required />
        </div>
        <div class="login-block">
            <label for="confirm-password" class="login-label">Confirm password</label>
            <input type="password" name="confirm_password" value_="1234" id="confirm-password" class="login-field" required />
        </div>
        <input type="submit" name="_submit" value="Register" class="login-button" />
    </form>



</div>
<?php
// END CONTAINER
require_once './components/partials/footer.php';
require_once './components/partials/end.php';
?>