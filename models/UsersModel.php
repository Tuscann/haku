<?php
class UsersModel extends BaseModel
{
    public function login(string $username, string $password)
    {
        $statement = self::$db->prepare("SELECT * FROM users WHERE username='$username'");
        $statement->execute();
        $user = $statement->fetch();
        return $user;
    }


    public function register(string $username, string $password_hash, string $email)
    {
        $statement = self::$db->prepare("INSERT INTO users (username, password_hash, email) "
                . "VALUES ('$username', '$password_hash', '$email')");
        $statement->execute();
        $user_id = self::$db->query("SELECT LAST_INSERT_ID()")->fetch();

        return $user_id;
    }

    function isUserExistsByEmail(string $email): bool
    {
        $query = self::$db->prepare("SELECT * FROM users WHERE email='$email'");
        $query->execute();
        if ($query->rowCount() > 0){
            return true;
        }
        return false;
    }

    function isUserExistsByUsername(string $username): bool
    {
        $query = self::$db->prepare("SELECT * FROM users WHERE username='$username'");
        $query->execute();
        if ($query->rowCount() > 0){
            return true;
        }
        return false;
    }

    public function getCurrentUserInfo($name) {
        $statement = self::$db->prepare("SELECT * FROM users WHERE username='$name'");
        $statement->execute();
        return $user = $statement->fetch();
    }

    public function getUserById($id): array {
        $statement = self::$db->prepare("SELECT * FROM users WHERE id='$id'");
        $statement->execute();
        return $user = $statement->fetch();
    }
}