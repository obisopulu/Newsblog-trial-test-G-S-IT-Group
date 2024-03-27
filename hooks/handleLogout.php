<?php

if (isset($_GET["logout"])) {
  $path = env('PATH_AFTER_LOGOUT');
  // 
  session_unset();
  session_destroy();
  // 
  nav($path);
}
