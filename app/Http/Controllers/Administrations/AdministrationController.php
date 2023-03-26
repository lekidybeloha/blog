<?php

namespace App\Http\Controllers\Administrations;

use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
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
        parent::setInertiaAdminView();
        return Inertia::render('Administrations/Dashboard', [
            'articles' => $this->articeRepository->all()->count(),
            'categories' => $this->categoryRepository->all()->count(),
        ]);
    }

    public function categories(): Response
    {
        parent::setInertiaAdminView();
        return Inertia::render('Administrations/Categories/Category', [
            'categories' => $this->categoryRepository->all()
        ]);
    }

    public function articles(): Response
    {
        parent::setInertiaAdminView();
        return Inertia::render('Administrations/Article', [
            'articles' => $this->articeRepository->all()
        ]);
    }

}
