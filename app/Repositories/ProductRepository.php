<?php

namespace App\Repositories;

use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductRepositoryInterface
{

    public function getAll(): Collection
    {
        return Product::with('users')->get();
    }

    public function getPaginated(int $perPage)
    {
        return Product::query()->with('users')->paginate($perPage);
    }

    public function getProductById(int $productId)
    {
        return Product::query()->with('users')->findOrFail($productId);
    }
}
