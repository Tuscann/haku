<?php

abstract class BaseModel
{
    protected static $db;

    public function __construct()
    {
        if (self::$db == null) {
            try {
                self::$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS, DB_OPTIONS);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
    }
}