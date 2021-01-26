<?php
namespace App\Data;

use App\Model\User;


interface SecurityInterface
{

    public function create(User $user);

    public function read(User $user);

    public function update(User $user);

    public function delete(User $user);
}

