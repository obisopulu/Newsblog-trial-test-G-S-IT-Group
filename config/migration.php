<?php

declare(strict_types=1);

class Migration
{
  private $conn;

  function __construct()
  {
    $database = env("DB_DATABASE");
    $username = env("DB_USERNAME");
    $password = env("DB_PASSWORD");

    $this->conn = $conn = new mysqli("localhost", $username, $password, $database);
    if ($conn->connect_error) {
      die($conn->connect_error);
    }
  }

  public function refresh(): bool
  {
    $sql = $this->users() . $this->posts() . $this->comments();
    $this->conn->multi_query($sql);
    return true;
  }

  public function seed(): bool
  {
    foreach (['users', 'posts', 'comments'] as $tb) {
      $jsonData = file_get_contents("./data/fake-{$tb}.json");
      $formData = json_decode($jsonData, true);
      // 
      foreach ($formData as $req) {
        $len = count($req);
        $fields = join(",", array_keys($req));
        $params = rtrim(str_repeat("?,", $len), ",");
        $types = str_repeat("s", $len);
        $values = array_values($req);
        // 
        $sql = "INSERT INTO {$tb} ({$fields}) VALUES ({$params})";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param($types, ...$values);
        $stmt->execute();
        // 
        $this->conn->insert_id ?? -1;
      }
    }
    return true;
  }

  private function users(): string
  {
    $tb = __FUNCTION__;
    return "DROP TABLE IF EXISTS `{$tb}`;
      
        CREATE TABLE `{$tb}` (
          `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
          `avatar` varchar(255) DEFAULT NULL,
          `name` varchar(160) NOT NULL,
          `email` varchar(160) NOT NULL UNIQUE,
          `password` varchar(255) NOT NULL,
          `role` enum('POST','COMMENT','BOTH','NONE') NOT NULL DEFAULT 'COMMENT',
          `status` int(1) NOT NULL DEFAULT 0,
          `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
          `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
          `deleted_at` timestamp NULL DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

        ALTER TABLE `{$tb}`
          ADD KEY `searchable` (`name`,`email`);
      ";
  }

  private function posts(): string
  {
    $tb = __FUNCTION__;
    return "DROP TABLE IF EXISTS `{$tb}`;
      
      CREATE TABLE `{$tb}` (
          `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
          `user_id` int(11) NOT NULL,
          `thumbnail` varchar(255) DEFAULT NULL,
          `headline` varchar(160) NOT NULL UNIQUE,
          `source` varchar(160) DEFAULT NULL,
          `article` longtext NOT NULL,
          `status` int(1) NOT NULL DEFAULT 0,
          `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
          `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
          `deleted_at` timestamp NULL DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

        ALTER TABLE `{$tb}`
          ADD KEY `searchable` (`user_id`,`headline`);
      ";
  }

  private function comments(): string
  {
    $tb = __FUNCTION__;
    return "DROP TABLE IF EXISTS `{$tb}`;
      
        CREATE TABLE `{$tb}` (
          `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
          `user_id` int(11) NOT NULL,
          `post_id` int(11) NOT NULL,
          `comment` varchar(255) NOT NULL,
          `status` int(1) NOT NULL DEFAULT 0,
          `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
          `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
          `deleted_at` timestamp NULL DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

        ALTER TABLE `{$tb}`
          ADD KEY `searchable` (`user_id`,`post_id`);
      ";
  }
}

$migration = new Migration();
