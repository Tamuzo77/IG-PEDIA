<?php

namespace App\View\Components\customer;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class douwnloadBloc extends Component
{
    /**
     * Create a new component instance.
     * 
     * 
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        //$data = ['1','2','3','4','5','6','7','8','9'];
        return view('components.customer.douwnload-bloc', ['data'=>['1','2','3','4','5','6','7','8','9']]);
    }
}
