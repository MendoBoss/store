<?php

namespace App\View\Components;

use Closure;
use App\Models\Favorite;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ProductCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct( public $product)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $favorites=null;
        if(isset(Auth()->user()->id)){
            $favorites = Favorite::where('user_id',Auth()->user()->id)->get();
        }
        return view('components.product-card',compact('favorites'));
    }
}
