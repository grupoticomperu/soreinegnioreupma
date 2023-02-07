<?php

namespace App\Http\Livewire\Admin;

use App\Models\Subcategory;
use Livewire\Component;

class SubcategoryList extends Component
{

    public function render()
    {
        $subcategorias = Subcategory::all();
        return view('livewire.admin.subcategory-list', compact('subcategorias'))->extends('admin.layout');
    }
}
