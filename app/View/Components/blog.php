<?php

namespace App\View\Components;

use Illuminate\View\Component;

class blog extends Component
{
    public $blog;
    public $popular;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($blog, $popular)
    {
        $this->blog = $blog;
        $this->popular = $popular;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog');
    }
}