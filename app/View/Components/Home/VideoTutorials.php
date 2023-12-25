<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorials = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->videoTutorials = [
            [
                'videoId' => 'JNhmEoBsZ48&t',
                'title' => 'PHP Tutorial for Absolute Begginers - PHP Couse 2021',
                'description' => 'This is a 5hour php coarse and this coarse you will learn the basic of programming'
            ],
            [
                'videoId' => 'JNhmEoBsZ48&t',
                'title' => 'Full Stack App with Laravel- PHP Couse 2021',
                'description' => 'This is a 5hour php coarse and this coarse you will learn the basic of programming'
            ],
            [
                'videoId' => 'JNhmEoBsZ48&t',
                'title' => 'Learn How to build PHP MVC Framework',
                'description' => 'This is a 5hour php coarse and this coarse you will learn the basic of programming'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.video-tutorials');
    }
}
