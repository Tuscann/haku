<?php
class UsersModel extends BaseModel
{
    public function login(string $username)
    {
        $statement = self::$db->prepare("SELECT * FROM users WHERE username='$username'");
        $statement->execute();
        $user = $statement->fetch();
        return $user;        
    }


    public function register(string $username, string $password_hash, string $email)
    {
        $statement = self::$db->prepare("INSERT INTO users (username, password, email) "
                . "VALUES ('$username', '$password_hash', '$email')");
        $statement->execute();
        $user_id = self::$db->query("SELECT LAST_INSERT_ID()")->fetch();

        return $user_id;
    }

    public function editUser (string $userId, string $username, string $password_hash, string $email,
                              string $first_name, string $last_name, string $profile_pic)
    {
        $statement = self::$db->prepare("UPDATE users 
                                        SET username='$username', password='$password_hash', email='$email',
                                            first_name='$first_name', last_name='$last_name', profile_pic='$profile_pic'
                                            WHERE id='$userId'");
        return $statement->execute();
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

    public function getCurrentUserInfo($username) {
        $statement = self::$db->prepare("SELECT * FROM users WHERE username='$username'");
        $statement->execute();
        return $user = $statement->fetch();
    }

    public function getUserById($id): array {
        $statement = self::$db->prepare("SELECT * FROM users WHERE id='$id'");
        $statement->execute();
        return $user = $statement->fetch();
    }
}