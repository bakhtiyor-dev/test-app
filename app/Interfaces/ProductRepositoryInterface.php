<?php

namespace App\Interfaces;

interface ProductRepositoryInterface
{
    public function getAll();

    public function getPaginated(int $perPage);

    public function getProductById(int $productId);
}
