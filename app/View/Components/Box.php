<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Box extends Component
{
    
   
    public $title;
    public $img;
    public $link;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $immagine, $link)
    {
        //
        $this->title = $title;
        $this->img = $immagine;
        $this->link = $link;
        
    }

   
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.box');
    }
}
