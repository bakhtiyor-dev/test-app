<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{

    public function getAll(): Collection
    {
        return User::with('products')->get();
    }

    public function getPaginated(int $perPage): LengthAwarePaginator
    {
        return User::query()->with('products')->paginate($perPage);
    }

    public function getUserById(int $userId)
    {
        return User::query()->with('products')->findOrFail($userId);
    }
}
