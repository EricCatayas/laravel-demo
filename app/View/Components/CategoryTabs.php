<?php

namespace App\View\Components;

use Closure;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryTabs extends Component
{
    public string $name;
    /**
     * Create a new component instance.
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = Category::all();

        return view('components.category-tabs', [
            'categories' => $categories,
        ]);
    }
}
