<?php
namespace App\Security;


use App\Data\SecurityDAO;
use App\Model\User;


class SecurityService
{

    private $dao;

    public function __construct()
    {
        $this->dao = new SecurityDAO();
    }

    public function login(User $user)
    {
        return $this->dao->read($user);   
    }

    public function register(User $user)
    {
        return $this->dao->create($user);
    }

    public function logout()
    {
        return session_destroy();
    }

    public function getProducts()
    {
        return $this->dao->getProducts();
    }
}

