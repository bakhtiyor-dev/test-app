<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function getAll();

    public function getPaginated(int $perPage);

    public function getUserById(int $userId);
}
