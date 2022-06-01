<?php
session_start();
$_SESSION = array();
session_destroy();
setcookie('email', null, time() - 24*60*60, "/", null, false, true);
setcookie('PHPSESSID', null, time() - 24*60*60, "/", null, false, true);

header('location:index.php');
exit;