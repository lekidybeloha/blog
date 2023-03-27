<?php

namespace App\Repositories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;

class ArticleRepository
{
    public function all(): Collection
    {
        return Article::orderBy('created_at', 'DESC')->get();
    }

    public function lastFive()
    {
        return Article::orderBy('created_at', 'DESC')->take(5)->get();
    }

    public function findBySlug($slug)
    {
        return Article::where('slug', '=', $slug)->first();
    }
}
