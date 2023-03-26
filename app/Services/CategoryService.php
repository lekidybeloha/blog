<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function add($data)
    {
        return Category::firstOrCreate($data);
    }
}
