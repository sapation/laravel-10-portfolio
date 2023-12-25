<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel','Tailwind.css','Vue'],
                'title' => 'Full stack app with Laravel, Tailwindcss and Vue 3',
                'image' => url('/img/survey.png'),
                'github' => 'https://github.com'
            ],
            [
                'category' => ['Yii2', 'Bootstrap'],
                'title' => 'E-cormmerce website with Yii2',
                'image' => url('/img/yii2-ecommerce.jpg'),
                'github' => 'https://github.com'
            ],
            [
                'category' => ['Laravel','PHP'],
                'title' => 'Rest Api with Laravel 10 and santum',
                'image' => url('/img/laravel-rest-api.png'),
                'github' => 'https://github.com'
            ],
            [
                'category' => ['PHP'],
                'title' => 'PHP MVC Framework',
                'image' => url('/img/php-mvc-framework.png'),
                'github' => 'https://github.com'
            ],
            [
                'category' => ['Yii2', 'Bootstrap'],
                'title' => 'Youtube clone with Yii2',
                'image' => url('/img/yii2-youtube-clone.png'),
                'github' => 'https://github.com'
            ],
            [
                'category' => ['Yii2', 'VueJs'],
                'title' => 'Yii2 + Vuejs Notes Application',
                'image' => url('/img/yii2-vue-notes.png'),
                'github' => 'https://github.com'
            ]
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
