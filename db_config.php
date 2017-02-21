
<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=game_world_db', 'root', '');
} catch (PDOException $e) {
    die('Could not connect.');
}
