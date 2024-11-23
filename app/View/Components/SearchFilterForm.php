<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchFilterForm extends Component
{
    public $categories;
    public $action;

    /**
     * Create a new component instance.
     */
    public function __construct($categories, $action)
    {
        $this->categories = $categories;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('books.partial.search-filter-form');
    }
}
