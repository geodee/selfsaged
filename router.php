<?php


if (preg_match('/^.*\.(jpg|jpeg|png|gif|svg|css|ico|woff|ttf|svg|js)$/', $_SERVER["REQUEST_URI"])) {
  return false;
} else {

// Set timezone
date_default_timezone_set("UTC");

// Directory that contains error pages
define("ERRORS", dirname(__FILE__) . "/errors");

// Default index file
define("DIRECTORY_INDEX", "index.php");

// Optional array of authorized client IPs for a bit of security
$config["hostsAllowed"] = array();

function logAccess($status = 200) {
    file_put_contents("php://stdout", sprintf("[%s] %s:%s [%s]: %sn",
        date("D M j H:i:s Y"), $_SERVER["REMOTE_ADDR"],
        $_SERVER["REMOTE_PORT"], $status, $_SERVER["REQUEST_URI"]));
}

// Parse allowed host list
if (!empty($config['hostsAllowed'])) {
    if (!in_array($_SERVER['REMOTE_ADDR'], $config['hostsAllowed'])) {
        logAccess(403);
        http_response_code(403);
        include ERRORS . '/403.php';
        exit;
    }
}

// if requesting a directory then serve the default index
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$ext = pathinfo($path, PATHINFO_EXTENSION);
if (empty($ext)) {
    $path = rtrim($path, "/") . "/" . DIRECTORY_INDEX;
}

// If the file exists then return false and let the server handle it
if (file_exists($_SERVER["DOCUMENT_ROOT"] . $path)) {
    return false;
}

// default behavior
// logAccess(404);
// http_response_code(404);
// include ERRORS . "/404.php";




$pt = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pat = $_SERVER['REQUEST_URI'];
$plat = trim($_SERVER['REQUEST_URI'], '/');
if ($pat == "/" ){
  include "index.php";
  };
$spat = $plat . '.php';
  {
  if(!@include($spat)) include ERRORS . "/404.php";
//    include $spat;
  }
}
?>
