<?php

namespace App\View\Components\partials;

use Illuminate\View\Component;

class SideBar extends Component
{
    public $first;
    public $second;
    public $items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($first, $second, $items)
    {
        //
        $this->first = $first;
        $this->second = $second;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.custom-partials.side-bar');
    }

    public function anotherItems($lang){
        return [
            'c', 'c++', 'java', $lang
        ];
    }
}
