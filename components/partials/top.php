<?php 
require_once __DIR__ . '/../../config/app.php';
require_once __DIR__ . '/../../hooks/handleLogout.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="/public/favicon.png">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="./public/styles/app.css">
  <link rel="stylesheet" href="./public/styles/alert.css">
</head>

<body>