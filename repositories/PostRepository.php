<?php

declare(strict_types=1);

require_once './config/database.php';

final class PostRepository extends Database
{
  private static $table = 'posts';

  function __construct()
  {
    parent::__construct(self::$table);
  }

  # PARAM 
  /* [
    'user_id' => $_SESSION['user_id'], 
    'headline' => 'headline 1', 
    'article' => 'article 2' ] */
  function addPost(array $formData): int
  {
    return $this->create($formData);
  }

  function getPosts(): array
  {
    return $this->read();
  }

  function getPost(int $id): object
  {
    return $this->read($id);
  }

  function getLatestPost(): object
  {
    return $this->top();
  }

  function getLimitedPosts(int $limit = 10, int $offset = 0): array
  {
    return $this->paginate($limit, $offset);
  }

  # PARAM ['user_id' => 1] or ['post_id' => 1]
  function findPosts(array $formData): array
  {
    return $this->read($formData);
  }

  function removePost(int $id): int
  {
    return $this->delete($id);
  }
}

$postRepository = new PostRepository();
