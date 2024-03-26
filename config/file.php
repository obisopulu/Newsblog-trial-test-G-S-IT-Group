<?php

class File
{
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
