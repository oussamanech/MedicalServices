<?php   

session_start();
// base url
define("BURL","http://127.0.0.55/");
define("BURLA","http://127.0.0.55/admin/");
define("ASSETS","http://127.0.0.55/assets");

// base file link 
define("BL",__DIR__.'/');
define("BLA",__DIR__.'/admin/');




/* Connect to database */
require_once(BL.'functions/db.php');
