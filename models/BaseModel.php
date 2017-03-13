<?php
include_once 'User.php';

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

    public function getUserByUsername($username) {
        $statement = self::$db->prepare("SELECT * FROM users WHERE username='$username'");
        $statement->execute();
        $user = $statement->fetch();

        $currentUser = new User($user['id'], $user['username'], $user['email'],
                        $user['profile_pic'], $user['first_name'], $user['last_name'], $user['password']);

        return $currentUser;
    }

    public function getUserById($id) {
        $statement = self::$db->prepare("SELECT * FROM users WHERE id='$id'");
        $statement->execute();
        $user = $statement->fetch();

        $currentUser = new User($user['id'], $user['username'], $user['email'],
            $user['profile_pic'], $user['first_name'], $user['last_name'], $user['password']);

        return $currentUser;
    }
}