<?php

declare(strict_types=1);

require_once './config/database.php';

final class UserRepository extends Database
{
  private static $table = 'users';

  function __construct()
  {
    parent::__construct(self::$table);
  }

  # PARAM
  /* [
    'name' => 'john doe', 
    'email' => 'john@example.com',
    'password' => '$trongp@ssw0rd' ] */
  function signUp(array $formData)
  {
    $path = env('PATH_AFTER_REGISTER');
    $userId = $this->create($formData);
    if ($userId > 0) nav($path);
  }

  # PARAM ['email' => 1] or ['post_id' => 1]
  function signIn(array $formData): string
  {
    $path = env('PATH_AFTER_LOGIN');
    $user = $this->read(['email' => $formData['email']]);
    // 
    if (count($user) > 0) {
      $user = (object)$user[0];
      if ($formData['password'] === $user->password) {
        $_SESSION['user'] = $user;
        $_SESSION['user_id'] = $user->id;
        // 
        nav($path);
      } else {
        return "Password does not match";
      }
    } else {
      return "Email not found";
    }
  }

  function signOut()
  {
    $path = env('PATH_AFTER_LOGOUT');
    // 
    session_unset();
    session_destroy();
    // 
    nav($path);
  }

  # PARAM ['role' => 'POST'], 1
  function updateRole(array $formData, int $id): int
  {
    if (in_array($formData['role'], ['COMMENT', 'POST', 'BOTH', 'NONE']))
      return $this->update($formData, $id);
    else
      return -1;
  }

  function getUser(int $id): object
  {
    return $this->read($id);
  }

  function getUsers(): array
  {
    return $this->read();
  }
}

$userRepository = new UserRepository();
