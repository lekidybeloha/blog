<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    private CategoryRepository $categoryRepository;
    private ArticleRepository $articleRepository;
    public function __construct()
    {
        $this->categoryRepository = new CategoryRepository();
        $this->articleRepository = new ArticleRepository();
    }
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('welcome');
    }

    public function getCategoryOrArticle($category_slug, $article_slug = ''): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $category = $this->categoryRepository->findBySlug($category_slug);
        if(!$category)
            abort(404);

        if($article_slug == '')
            return view('category.list', compact('category'));
        else
        {
            $article = $this->articleRepository->findBySlug($article_slug);
            if(!$article)
                abort(404);

            return view('articles.one', compact('article'));
        }

    }
}
