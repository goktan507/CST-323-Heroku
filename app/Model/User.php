<?php
namespace App\Model;

class User
{

    private $username;

    private $password;

    private $name;

    private $email;

    public function __construct($username, $password, $name, $email)
    {
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
        $this->username = $username;
    }

    /**
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     *
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     *
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    /**
     *
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     *
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}

