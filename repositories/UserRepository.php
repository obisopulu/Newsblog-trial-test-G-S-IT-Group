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
  function addUser(array $formData): int
  {
    return $this->create($formData);
  }

  function getUsers(): array
  {
    return $this->read();
  }

  function getUser(int $id): object
  {
    return $this->read($id);
  }

  # PARAM ['email' => 'admin@test.com'] or ['role' => 'COMMENT']
  function findUsers(array $formData): array
  {
    return $this->read($formData);
  }

  # PARAM ['role' => 'POST'], 1
  function updateRole(array $formData, int $id): int
  {
    if (in_array($formData['role'], ['COMMENT', 'POST', 'BOTH', 'NONE']))
      return $this->update($formData, $id);
    else
      return -1;
  }
}

$userRepository = new UserRepository();
