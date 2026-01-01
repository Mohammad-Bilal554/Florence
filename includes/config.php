<?php
/**
 * Global Configuration File
 * Works on Local (XAMPP) + Render
 */

/* ===============================
   AUTO BASE URL
   =============================== */

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

// Detect localhost
if ($host === 'localhost') {
    // XAMPP project path
    $basePath = "/Projects/FLORENCE/";
} else {
    // Render or live server
    $basePath = "/";
}

define("BASE_URL", $protocol . $host . $basePath);


/* ===============================
   ASSET URLS
   =============================== */

define("CSS_URL", BASE_URL . "assets/css/");
define("JS_URL", BASE_URL . "assets/js/");
define("IMG_URL", BASE_URL . "assets/images/");
