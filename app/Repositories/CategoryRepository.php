<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CategoryRepository
{
    public function all(): Collection
    {
        return Category::all();
    }

    public function findBySlug($slug): Model|Builder|null
    {
        return Category::with('articles')->where('slug', '=', $slug)->first();
    }
}
