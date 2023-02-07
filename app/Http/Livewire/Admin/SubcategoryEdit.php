<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Subcategory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class SubcategoryEdit extends Component
{

    use WithFileUploads;
    public $categoria_id;
    public $name, $slug, $state, $shortdescription, $longdescription, $order, $image;
    public $title, $description, $keywords, $imageback;

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



    public function mount(Subcategory $subcategory){
        //dd($product->name);
        //$this->product = $product;
        $this->image = null;
        $this->subcategory = $subcategory;
        $this->name = $this->subcategory->name;

        $this->categories = Categoria::all();
        $this->categoria_id = $this->subcategory->categoria_id;

        $this->shortdescription = $this->subcategory->shortdescription;
        $this->longdescription = $this->subcategory->longdescription;

        $this->state = $this->subcategory->state;
        $this->order = $this->subcategory->order;
        $this->title = $this->subcategory->title;
        $this->description = $this->subcategory->description;
        $this->keywords = $this->subcategory->keywords;
        $this->imageback = $this->subcategory->image;
        $this->slug = $this->subcategory->slug;


    }




    public function save(){
        //dd($this->description);
        $rules = $this->rules;
        $rules['name'] = 'required|unique:subcategories,name,'.$this->subcategory->id;
       // dd($this->image1);


        if($this->image){
           // dd($this->image);
            $rules['image'] ='required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
            $this->validate($rules);
            //Storage::disk('s3')->delete([$this->subcategory->image]);

            //$this->product->image1 = Storage::url($this->image1->store('products', 'public'));
            $this->subcategory->image = Storage::disk('s3')->put('subcategories', $this->image , 'public');



            $image11 = $this->subcategory->image;
        }else{
           // dd($this->image);
            $image11 = $this->subcategory->image;
            $this->validate($rules);
        }




      //  $this->validate();
        $this->subcategory->update([
            'name' => $this->name,
            'categoria_id'=> $this->categoria_id,
            'shortdescription' => $this->shortdescription,
            'longdescription' => $this->longdescription,
            'order' => $this->order,
            'state' => $this->state,
            'title' => $this->title,
            'description' => $this->description,
            'keywords' => $this->keywords,
            'image' => $image11,

        ]);

        return redirect()->route('subcategory.list')->with('flash', 'Sub Categoria Actualizado con exito');

    }






    public function render()
    {
        return view('livewire.admin.subcategory-edit')->extends('admin.layout');;
    }
}
