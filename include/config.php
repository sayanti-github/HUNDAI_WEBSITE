<?php
// ob_start();
// @session_start();
// $sessid = session_id();
// define('DB_NAMEs','merakiads_merakiads');
// define('DB_USERs','merakiads_merakiads');
// define('DB_PASSs','175!y2Qaxqwn');
// define('DB_HOSTs','localhost');
// define('FROM','no-reply@merakiads.in');
// define('SITENAME','Merakiads');
// define('SITEURL','https://mukeshhyundai.com/'); 
// require_once('class.db.php');
// include('admin.php');
// $admin	=	new admin();
ob_start();
@session_start();
$sessid = session_id();
define('DB_NAMEs','dev_sysbean_hyundai_db');
define('DB_USERs','dev_sysbean_hyundai');
define('DB_PASSs','Sysbean@123');
define('DB_HOSTs','122.160.52.20');
define('FROM','no-reply@merakiads.in');
define('SITENAME','hyundai-demo');
define('SITEURL','https://hyundai-demo.sysbean.com'); 
require_once('class.db.php');
include('admin.php');
$admin	=	new admin();
?>