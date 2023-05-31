<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(protected UserRepositoryInterface $repository)
    {
    }

    public function index()
    {
        return UserResource::collection($this->repository->getAll());
    }

    public function show($userId)
    {
        return UserResource::make($this->repository->getUserById((int)$userId));
    }

    public function getPaginated(Request $request)
    {
        $users = $this->repository->getPaginated((int)$request->input('per_page'));

        return UserResource::collection($users);
    }
}
