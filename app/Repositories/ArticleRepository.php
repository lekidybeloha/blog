<?php

namespace App\Repositories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;

class ArticleRepository
{
    public function all(): Collection
    {
        return Article::all();
    }

    public function findBySlug($slug)
    {
        return Article::where('slug', '=', $slug)->first();
    }
}
