<?php
$title = 'Test';

require_once './components/partials/top.php';
require_once './config/migration.php';
include_once './repositories/PostRepository.php';
include_once './repositories/CommentRepository.php';
include_once './repositories/UserRepository.php';

dd(
  // $migration->refresh(),
  // $migration->seed(),
  // $migration->comments(),
);
