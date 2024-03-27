<?PHP
# STOP WARNING ERRORS
error_reporting(E_ALL ^ E_DEPRECATED);
set_error_handler(function () {
});

# STOP CACHE MEMORY
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

# EXTEND VAR_DUMP
ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);
ini_set('xdebug.var_display_max_depth', -1);

# START SESSION
session_start();

# CONSTANTS
define('LOGIN_URL', 'login.php');
define('BASE_DIR', $_SERVER['SERVER_NAME'] == 'localhost' ? '' : dirname($_SERVER['DOCUMENT_ROOT'] . $_SERVER['PHP_SELF']) . '/');
define('FORM_ATTRIB', 'action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" method="post" autocomplete="off" enctype="multipart/form-data"');
define('FORM_ATTRIB_GET', 'action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" method="get" autocomplete="off"');


# METHODS
function dd(...$args)
{
  echo "<pre>" . var_dump($args) . "</pre>";
}

function nav($path)
{
  echo '<script type="text/javascript">location.assign("' . $path . '");</script>';
}

function env($key = null)
{
  $dir = "./.env";
  $obj = [];
  // 
  $file = fopen($dir, "r");
  while (!feof($file)) {
    $arr = explode('=', fgets($file));
    if (strlen(trim($arr[0])) > 0)
      $obj[$arr[0]] = trim($arr[1]);
  }
  fclose($file);
  // 
  if ($key) {
    if (array_key_exists($key, $obj)) {
      return $obj[$key];
    } else {
      return null;
    }
  } else {

    return (object)$obj;
  }
}

function isAuth() {
  return isset($_SESSION["user_id"]);
}

function imgPipe($img){
  $path = env('PATH_STORAGE');
  return str_contains($img, 'http') ? $img : $path.$img;
}

