<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Article extends Component
{
    public int $id;
    public string $titre;
    public string $description;
    
    public function __construct(int $id, string $titre, string $description)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
    }

    public function render(): View|Closure|string
    {
        return view('components.article');
    }
}
