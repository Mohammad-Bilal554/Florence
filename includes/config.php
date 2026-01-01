<?php
/**
 * Global Configuration File
 * Project: FLORENCE
 * Environment: LOCAL (XAMPP)
 */

/* ===============================
   BASE URL (LOCAL)
   =============================== */

// Project folder name inside htdocs
define("BASE_URL", "/Projects/FLORENCE/");


/* ===============================
   ASSET URLS
   =============================== */

define("CSS_URL", BASE_URL . "assets/css/");
define("JS_URL", BASE_URL . "assets/js/");
define("IMG_URL", BASE_URL . "assets/images/");


/* ===============================
   FILE SYSTEM PATHS
   =============================== */

define("ROOT_PATH", dirname(__DIR__) . "/");
define("INCLUDES_PATH", ROOT_PATH . "includes/");
