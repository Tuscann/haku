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

    public function __construct($id, $username, $email, $picture, $firstName, $lastName, $password)
    {
        $this->setId($id);
        $this->setUsername($username);
        $this->setEmail($email);
        $this->setPicture($picture);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setPassword($password);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;

    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
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