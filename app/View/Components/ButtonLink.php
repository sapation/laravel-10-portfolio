<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $href, 
        public string $target='_self', 
        public string $variant='primary')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-link');
    }
}
