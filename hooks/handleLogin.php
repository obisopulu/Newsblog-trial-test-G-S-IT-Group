<?php

if ($_POST["_submit"] === 'Login') {
  $formData = Form::sanitize($_POST);

  $users = $userRepository->findUsers(['email' => $formData['email']]);
  // dd($_POST, $formData, $users);
  if (count($users) > 0) {
    $user = (object)$users[0];
    if ($formData['password'] === $user->password) {
      $path = env('PATH_AFTER_LOGIN');
      $error = (object)["variant" => "success", "message" => "Log in successful"];
      $_SESSION['user'] = $user;
      $_SESSION['user_id'] = $user->id;
      nav($path);
    } else {
      $error = (object)["variant" => "danger", "message" => "Password does not match"];
    }
  } else {
    $error = (object)["variant" => "danger", "message" => "Email address not found"];
  }
}
