<?php

header("Content-Type: text/html; charset=utf-8");

ob_start();

session_start();

// include composer components
require_once("vendor/autoload.php");

defined("DB_HOST") ? null : define("DB_HOST", "127.0.0.1");
defined("DB_USER") ? null : define("DB_USER", "alekseylovchikov");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "c9");
defined("DB_PORT") ? null : define("DB_PORT", 3306);

/* begin smarty */

$smarty = new Smarty();

// config smarty
$smarty
    ->setTemplateDir(__DIR__ . "/templates")
    ->setCompileDir(__DIR__  . "/templates_c")
    ->setConfigDir(__DIR__   . "/configs")
    ->setCacheDir(__DIR__    . "/cache");

/* end smarty */