<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(protected ProductRepositoryInterface $repository)
    {
    }

    public function index()
    {
        return ProductResource::collection($this->repository->getAll());
    }

    public function show($productId)
    {
        return ProductResource::make($this->repository->getProductById((int)$productId));
    }

    public function getPaginated(Request $request)
    {
        $products = $this->repository->getPaginated((int)$request->input('per_page'));

        return ProductResource::collection($products);
    }
}
