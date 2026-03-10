<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Article extends Component
{
    public $titre;
    public $description;
    
    public function __construct($titre, $description)
    {
        $this->titre = $titre;
        $this->description = $description;
    }

    public function render(): View|Closure|string
    {
        return view('components.article');
    }
}
