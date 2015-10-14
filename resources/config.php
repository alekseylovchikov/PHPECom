<?php

ob_start();

session_start();

// os separator
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

// BEGIN templates
// template front
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
// template back
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");
// END templates

// BEGIN data conect
// host
defined("DB_HOST") ? null : define("DB_HOST", "127.0.0.1");
// username db
defined("DB_USER") ? null : define("DB_USER", "alekseylovchikov");
// password db
defined("DB_PASS") ? null : define("DB_PASS", "");
// db name
defined("DB_NAME") ? null : define("DB_NAME", "c9");
// db port
defined("DB_PORT") ? null : define("DB_PORT", 3306);
// END data conect