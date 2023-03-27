<?php

namespace App\View\Components;

use App\Repositories\ArticleRepository;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class DefaultLayout extends Component
{
    public Collection $articles;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $articleRepository = new ArticleRepository();
        $this->articles = $articleRepository->lastFive();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.default-layout');
    }
}
