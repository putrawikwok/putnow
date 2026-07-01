<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardCard extends Component
{
    public $icon;
    public $title;
    public $value;
    public $color;

    public function __construct($icon, $title, $value, $color)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->value = $value;
        $this->color = $color;
    }

    public function render(): View|Closure|string
    {
        return view('components.dashboard-card');
    }
}