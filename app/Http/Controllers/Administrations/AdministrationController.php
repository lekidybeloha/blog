<?php

namespace App\Http\Controllers\Administrations;

use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Validation\Rules\In;
use Inertia\Inertia;
use Inertia\Response;

class AdministrationController extends Controller
{
    private ArticleRepository $articeRepository;
    private CategoryRepository $categoryRepository;

    public function __construct()
    {
        $this->articeRepository = new ArticleRepository();
        $this->categoryRepository = new CategoryRepository();

    }

    public function index(): Response
    {
        $this->setView();
        return Inertia::render('Administrations/Dashboard', [
            'articles' => $this->articeRepository->all()->count(),
            'categories' => $this->categoryRepository->all()->count(),
        ]);
    }

    public function categories(): Response
    {
        $this->setView();
        return Inertia::render('Administrations/Categories/Category', [
            'categories' => $this->categoryRepository->all()
        ]);
    }

    public function articles(): Response
    {
        $this->setView();
        return Inertia::render('Administrations/Article', [
            'articles' => $this->articeRepository->all()
        ]);
    }

    protected function setView()
    {
        Inertia::setRootView('administrations/index');
    }
}
