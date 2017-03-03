<?php

define ('APP_ROOT', "/haku");

define('DEFAULT_CONTROLLER', 'home');
define('DEFAULT_ACTION', 'index');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_OPTIONS', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
define('DB_NAME', 'game_world_db');