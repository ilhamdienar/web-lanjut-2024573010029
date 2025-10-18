<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public $theme;

    public function __construct($theme = 'light')
    {
        $this->theme = $theme;
    }

    public function render()
    {
        return view('components.footer');
    }
}
