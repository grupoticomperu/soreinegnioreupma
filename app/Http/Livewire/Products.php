<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    public function render()
    {

        $products = Product::all();

        return view('livewire.products', compact('products'));
    }
}
