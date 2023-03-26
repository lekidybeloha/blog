<?php

namespace App\Services;

use App\Models\Article;

class ArticleService
{
    public function add($data)
    {
        return Article::create($data);
    }
}
