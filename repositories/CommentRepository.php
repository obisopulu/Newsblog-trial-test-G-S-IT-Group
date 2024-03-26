<?php

declare(strict_types=1);

require_once './config/database.php';

final class CommentRepository extends Database
{
  private static $table = "comments";

  function __construct()
  {
    parent::__construct(self::$table);
  }

  # PARAM
  /* [
    'user_id' => 1, 
    'post_id' => 1, 
    'comment' => 'comment 1' 
  ] */
  function addComment(array $formData): int
  {
    return $this->create($formData);
  }

  # PARAM ['user_id' => 1] or ['post_id' => 1]
  function findComments(array $formData): array
  {
    return $this->read($formData);
  }

  function removeComment(int $id): int
  {
    return $this->delete($id);
  }
}

$commentRepository = new CommentRepository();
