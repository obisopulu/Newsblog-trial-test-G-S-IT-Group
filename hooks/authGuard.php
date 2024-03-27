<?php
if (!$_SESSION["user_id"]) {
  $path = env('PATH_AFTER_LOGOUT');
  // 
  session_unset();
  session_destroy();
  // 
  nav($path);
}