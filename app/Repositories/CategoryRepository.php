<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository
{
    public function all(): Collection
    {
        return Category::all();
    }

    public function findBySlug($slug)
    {
        return Category::where('slug', '=', $slug)->first();
    }
}
