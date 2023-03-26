<?php

namespace App\Http\Controllers\Administrations;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class CategoryController extends Controller
{
    private CategoryService $categoryService;

    public function __construct()
    {
        $this->categoryService = new CategoryService();
    }

    public function create(CategoryRequest $request): RedirectResponse
    {
        $this->categoryService->add($request->validated());
        return redirect()->route('admin.category');
    }

    public function edit(Category $category): Response
    {
        parent::setInertiaAdminView();
        return Inertia::render('Administrations/Categories/Edit', [
            'category' => $category
        ]);
    }

    public function editProcess(Category $category, CategoryRequest $categoryRequest): RedirectResponse
    {
        $this->categoryService->update($category, $categoryRequest->validated());
        return redirect()->route('admin.category');
    }

    public function delete(Category $category): RedirectResponse
    {
        $this->categoryService->delete($category);
        return redirect()->route('admin.category');
    }
}
