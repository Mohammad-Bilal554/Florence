<?php
/**
 * Global Configuration File
 * Florence College of Nursing
 */

/* ===============================
   FORCE HTTPS BASE URL
   =============================== */

$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

// Local XAMPP
if ($host === 'localhost') {
    $baseUrl = "http://localhost/Projects/FLORENCE/";
} 
// Render / Live
else {
    $baseUrl = "https://" . $host . "/";
}

define("BASE_URL", $baseUrl);


/* ===============================
   ASSET URLS
   =============================== */

define("CSS_URL", BASE_URL . "assets/css/");
define("JS_URL", BASE_URL . "assets/js/");
define("IMG_URL", BASE_URL . "assets/images/");
