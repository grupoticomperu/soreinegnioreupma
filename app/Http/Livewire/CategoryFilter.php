<?php

namespace App\Http\Livewire;

use App\Models\Marca;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Livewire\WithPagination;

class CategoryFilter extends Component
{

    //use WithPagination;
    //protected $paginationTheme ="bootstrap";

    public $categoria, $subcategoria, $marca;
    public $subcategory;

    //protected $queryString = ['subcategoria', 'marca'];


    public function mount($subcategory){
        $this->subcategory = $subcategory;
    }

    public function limpiar(){
        $this->reset(['subcategoria', 'marca', 'page']);
    }


    public function updatedSubcategoria(){
        $this->resetPage();
    }

    public function updatedMarca(){
        $this->resetPage();
    }




    public function render()
    {

        $products = Product::where('subcategory_id', $this->subcategory->id)->paginate(30);
       // dd($products);
        $marcas = Marca::all();

/*         $productsQuery = Product::query()->whereHas('subcategory.categoria', function(Builder $query){
            $query->where('id', $this->categoria->id);
        });

        if ($this->subcategoria) {
            $productsQuery = $productsQuery->whereHas('subcategory', function(Builder $query){
                $query->where('slug', $this->subcategoria);
            });
        }

        if ($this->marca) {
            $productsQuery = $productsQuery->whereHas('marca', function(Builder $query){
                $query->where('name', $this->marca);
            });
        }

        $products = $productsQuery->paginate(2); */

        return view('livewire.category-filter', compact('products','marcas'));

    }
}
