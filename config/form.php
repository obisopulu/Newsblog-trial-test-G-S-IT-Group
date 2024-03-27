<?php

class Form
{

  static function nav($path)
  {
    echo '<script type="text/javascript">location.assign("' . $path . '");</script>';
  }

  static function props($as = 'post')
  {
    return   [
      "get" => sprintf('method="GET" action="%s" autocomplete="off"', htmlspecialchars($_SERVER['PHP_SELF'])),
      "post" => sprintf('method="POST" action="%s" autocomplete="off"', htmlspecialchars($_SERVER['PHP_SELF'])),
      "file" => sprintf('method="POST" action="%s" enctype="multipart/form-data" autocomplete="off"', htmlspecialchars($_SERVER['PHP_SELF'])),
    ][$as];
  }

  static function sanitize($post_array, $exclude = [])
  {
    $exc_post_array = array_merge(['id', 'ID'], $exclude);
    $new_post_array = array();
    foreach ($post_array as $key => $value) {
      if (
        !is_array($value) &&
        !in_array($key, $exc_post_array) &&
        substr($key, 0, 1) !== '_' &&
        substr($key, -1) !== '_'
      ) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        $new_post_array[$key] = $value;
      }
    }
    return $new_post_array;
  }

  static function validateEmail($args)
  {
    return filter_var($args, FILTER_VALIDATE_EMAIL);
  }

  static function encryptPassword($psw, $as = 'md5')
  {
    switch ($as) {
      case 'hash':
        $h = password_hash($psw, PASSWORD_DEFAULT);
        break;
      case 'sha1':
        $h = sha1($psw);
        break;
      default:
        $h = md5($psw);
    }
    // 
    return $h;
  }

  static function comparePassword($plain, $hashed, $as = 'md5')
  {
    switch ($as) {
      case 'hash':
        $h = password_hash($plain, PASSWORD_DEFAULT);
        break;
      case 'sha1':
        $h = sha1($plain);
        break;
      default:
        $h = md5($plain);
    }
    // 
    return $h === $hashed;
  }

  static function handleSubmit()
  {
    $tb = 'user';
    $nav = 'user/home.php';
    $error = '';
    $errno = 400;

    # var_dump($_POST, $_FILES);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $post = self::sanitize($_POST);
      $db_res = [$tb]; # sql_select_one($ctx_db_conn, $tb, 'email', $post['email']);

      if (is_array($db_res)) {
        if ($post['password'] == $db_res['password']) {
          $_POST = null;
          $error = 'Login successful';
          $errno = 200;

          $_SESSION['user'] = $db_res;

          $nav_f = sprintf('%s?error=%s&errno=%d', $nav, $error, $errno);
          self::nav($nav_f);
        } else {
          $error = 'Incorrect password';
        }
      } else {
        $error = 'Email or username not found';
      }
    }
  }
  
  static function upload($file_array, $dir, $use_file_name = null)
  {
    $ext = '.' . pathinfo($file_array['name'], PATHINFO_EXTENSION);
    $gen_file_name = date('YmdHisu');
    $new_file_name = is_null($use_file_name) ? $gen_file_name . $ext : $use_file_name . $ext;

    $from = $file_array['tmp_name'];
    $to = $dir . $new_file_name;
    return move_uploaded_file($from, $to) ? $new_file_name : false;
  }
}
