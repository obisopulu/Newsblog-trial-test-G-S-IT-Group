<?php

if ($_POST["_submit"] === 'Register') {
  if ($_POST["password"] !== $_POST["confirm_password"]) {
    $error = (object)["variant" => "danger", "message" => "Password and confirm password does not match"];
  } else {
    $formData = Form::sanitize($_POST, ['confirm_password']);
    $users = $userRepository->findUsers(['email' => $formData['email']]);
    // dd($_POST, $formData, $users);

    if (count($users) > 0) {
      $error = (object)["variant" => "danger", "message" => "Email address already exists"];
    } else {
      $auth = $userRepository->addUser($formData);
      // dd($_POST, $formData, $auth);
      if ($auth > 0) {
        $error = (object)["variant" => "success", "message" => "Registration successful, log in to continue."];
      } else {
        $error = (object)["variant" => "danger", "message" => "Something went wrong, please try again."];
      }
    }
  }
}
