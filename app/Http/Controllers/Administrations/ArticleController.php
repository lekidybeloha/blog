<?php

namespace App\Http\Controllers\Administrations;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Repositories\CategoryRepository;
use App\Services\ArticleService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ArticleController extends Controller
{
    private ArticleService $articeService;
    private CategoryRepository $categoryRepository;
    public function  __construct()
    {
        $this->articeService = new ArticleService();
        $this->categoryRepository = new CategoryRepository();
    }
    public function create(): Response
    {
        parent::setInertiaAdminView();
        return Inertia::render('Administrations/Articles/Create', [
            'tiny_key' => env('TINY_MCE_KEY'),
            'categories' => $this->categoryRepository->all(),
            'user_id' => auth()->id()
        ]);
    }

    public function store(ArticleRequest $request): RedirectResponse
    {
        $this->articeService->add($request->validated());
        return redirect()->route('admin.article');
    }
}
