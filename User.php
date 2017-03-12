<?php

class User
{
    private $username;
    private $email;
    private $id;
    private $picture;
    private $firstName;
    private $lastName;
    private $password;
    private $data;

    public function __construct($username, $email, $id, $picture, $firstName, $lastName, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->id = $id;
        $this->picture = $picture;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->password = $password;
    }

    public function getUserName()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;

    }

    public function getUserId()
    {
        return $this->id;
    }

    public function getUserPicture()
    {
        return $this->picture;
    }

    public function getUserFirstName()
    {
        return $this->firstName;
    }

    public function getUserLastName()
    {
        return $this->lastName;
    }

    public function userPassword()
    {
        return $this->password;
    }

    public function getData()
    {
        return $this->data = [
            'name' => $this->username,
            'email' => $this->email,
            'id' => $this->id,
            'picture' => $this->picture,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'password' => $this->password
        ];
    }

}