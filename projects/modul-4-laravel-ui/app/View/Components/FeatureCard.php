<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FeatureCard extends Component
{
    public $theme;
    public $title;
    public $icon;
    public $description;
    public $badge;

    public function __construct($theme = 'light', $title = '', $icon = '', $description = '', $badge = null)
    {
        $this->theme = $theme;
        $this->title = $title;
        $this->icon = $icon;
        $this->description = $description;
        $this->badge = $badge;
    }

    public function render()
    {
        return view('components.feature-card');
    }
}

