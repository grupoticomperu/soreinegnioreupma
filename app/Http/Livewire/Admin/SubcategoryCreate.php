<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Subcategory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class SubcategoryCreate extends Component
{

    use WithFileUploads;
    public $categoria_id;
    public $name, $slug, $state, $shortdescription, $longdescription, $order, $image;
    public $title, $description, $keywords;

    protected $rules = [
        'name'=> 'required|unique:subcategories',
        'categoria_id' => 'required',
        'shortdescription'=> 'nullable',
        'longdescription'=> 'nullable',
        'order' =>'nullable',
        'state'=> 'required',
        'title'=> 'nullable',
        'description'=> 'nullable',
        'keywords'=> 'nullable',
        'image'=> 'nullable',

    ];




    public function mount(){
        //$this->categories = Categoria::pluck('name','id');
        $this->categories = Categoria::all();
        //$this->marcas= Marca::pluck('name','id');
    }


    public function render()
    {
        return view('livewire.admin.subcategory-create')->extends('admin.layout');
    }




    public function save(){

         if($this->image){
             $rules = $this->rules;
             $rules['image'] = 'image|mimes:jpeg,png|max:2048';
             $this->validate();
             $image = Storage::disk('s3')->put('subcategories', $this->image , 'public');

             /* $image = $this->image->store('products', 'public');
             $urlimage = Storage::url($image); */
         }
         else {
             $this->validate();
             $image = '/subcategories/default.jpg';
         }



         $subcategory = new Subcategory();
         $subcategory->name = $this->name;
         $subcategory->categoria_id = $this->categoria_id;
         $subcategory->shortdescription = $this->shortdescription;
         $subcategory->longdescription = $this->longdescription;
         $subcategory->order = $this->order;
         $subcategory->state = $this->state;
         $subcategory->title = $this->title;
         $subcategory->description = $this->description;
         $subcategory->keywords = $this->keywords;

         $subcategory->image = $image;



         $subcategorycreado = $subcategory->save();

         return redirect()->route('subcategory.list')->with('flash', 'Producto Creado con exito');

      }








}
