<?php

namespace App\View\Components\series;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $action,
        public string $buttonText,
        public string $nome = '',
        public string $description = '',
        public string $cover_path = '',
        public bool $update = false
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.series.form');
    }
}
