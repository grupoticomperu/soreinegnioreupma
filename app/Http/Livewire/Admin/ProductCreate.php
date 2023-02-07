<?php

namespace App\Http\Livewire\Admin;

use App\Models\Um;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Product;
use Livewire\Component;
use App\Models\Categoria;
use App\Models\Subcategory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProductCreate extends Component
{

    use WithFileUploads;
    //public $categories=[], $modelos = [], $brands = [], $ums = [];
    public $categoryy="";
    public $categoria_id, $subcategory_id, $marca_id="", $modelo_id="", $um_id="", $currency_id="", $typeproduct_id="";
    public $purchaseprice, $saleprice, $salepricemin, $stock, $stockmin, $state;
    public $name, $slug, $description, $image1, $image2, $image3, $image4, $brochure, $codigo, $video;
    public $categories=[], $subcategories=[], $modelos = [], $marcas = [], $ums = [];
    public $titlegoogle, $descriptiongoogle, $keywordsgoogle;


    protected $rules = [
        'name'=> 'required|unique:products',
        'categoria_id' => 'required',
        'subcategory_id' => 'required',
        'marca_id' => 'required',
        'modelo_id' => 'nullable',
        'um_id'=>'nullable',
        'typeproduct_id'=> 'nullable',
        'currency_id' => 'nullable',
        'purchaseprice'=> 'nullable',
        'saleprice'=> 'nullable',
        'salepricemin'=> 'nullable',
        'stock'=> 'nullable',
        'stockmin'=> 'nullable',
        'codigo'=>'nullable',
        'description'=> 'required',
        'video' =>'nullable',
        'brochure'=> 'nullable',
        'state'=> 'required',
        'titlegoogle'=> 'nullable',
        'descriptiongoogle'=> 'nullable',
        'keywordsgoogle'=> 'nullable',
        'image1'=> 'nullable',
        'image2'=>'nullable',
        'image3'=> 'nullable',
        'image4'=> 'nullable',
    ];


    public function mount(){


        //$this->categories = Categoria::pluck('name','id');
        $this->categories = Categoria::all();
        //$this->marcas= Marca::pluck('name','id');
        $this->marcas= Marca::all();
        $this->modelos= Modelo::all();
        //$this->modelos = Modelo::pluck('name','id');
        $this->ums= Um::all();
        $this->subcategories = [];
        $this->subcategory_id="";

    }



    public function updatedCategoriaId($value){
        $this->subcategories = Subcategory::where('categoria_id', $value)->get();

        $this->reset(['subcategory_id']);
    }


    //public $categories;
    public function render()
    {
       // $categories = Categoria::all();
       // dd($categories);
        return view('livewire.admin.product-create')->extends('admin.layout');
    }



    public function save(){
       // dd($this->image1);
       // $this->validate();
        //$image1 = $this->image1->store('products', 'public');//guarda la imagen
        //$urlimage1 = Storage::url($image1);//crea su ruta

/*         $image2 = $this->image2->store('products', 'public');
        $urlimage2 = Storage::url($image2);

        $image3 = $this->image3->store('products', 'public');
        $urlimage3 = Storage::url($image3);

        $image4 = $this->image4->store('products', 'public');
        $urlimage4 = Storage::url($image4);
        */
        if($this->brochure){
            //$brochure = $this->brochure->store('brochureproducts', 'public');
            //$urlbrochure = Storage::url($brochure);
            $urlbrochure = Storage::disk('s3')->put('brochureproducts', $this->brochure , 'public');
        }
        else {
            $this->validate();
            $urlbrochure = null;
        }

        if($this->image1){
            $rules = $this->rules;
            $rules['image1'] = 'require|image|mimes:jpeg,png|max:2048';
            $this->validate();
            //$image1 = $this->image1->store('products', 'public');
            //$urlimage1 = Storage::url($image1);
            $urlimage1 = Storage::disk('s3')->put('products', $this->image1 , 'public');
        }
        else {
            $this->validate();
            //$urlimage1 = '/storage/products/default.jpg';
            $urlimage1 = 'products/default.jpg';
        }


        if($this->image2){
            $rules = $this->rules;
            $rules['image2'] = 'require|image|mimes:jpeg,png|max:2048';
            $this->validate();
            //$image2 = $this->image2->store('products', 'public');
            //$urlimage2 = Storage::url($image2);
            $urlimage2 = Storage::disk('s3')->put('products', $this->image2 , 'public');
        }
        else {
            $this->validate();
            //$urlimage2 = '/storage/products/default.jpg';
            $urlimage2 = 'products/default.jpg';
        }


        if($this->image3){
            $rules = $this->rules;
            $rules['image3'] = 'require|image|mimes:jpeg,png|max:2048';
            $this->validate();
            //$image3 = $this->image3->store('products', 'public');
            //$urlimage3 = Storage::url($image3);
            $urlimage3 = Storage::disk('s3')->put('products', $this->image3 , 'public');
        }
        else {
            $this->validate();
            //$urlimage3 = '/storage/products/default.jpg';
            $urlimage3 = 'products/default.jpg';
        }


        if($this->image4){
            $rules = $this->rules;
            $rules['image4'] = 'require|image|mimes:jpeg,png|max:2048';
            $this->validate();
            //$image4 = $this->image4->store('products', 'public');
            //$urlimage4 = Storage::url($image4);
            $urlimage4 = Storage::disk('s3')->put('products', $this->image4 , 'public');
        }
        else {
            $this->validate();
            //$urlimage4 = '/storage/products/default.jpg';
            $urlimage4 = 'products/default.jpg';
        }


        if($this->modelo_id==""){
            $this->modelo_id= null;
        }

        if($this->um_id==""){
            $this->um_id = null;
        }

/*         if($this->currency_id==""){
            $this->currency_id = null;
        } */

        if($this->typeproduct_id==""){
            $this->typeproduct_id = 1;
        }

         if($this->currency_id==""){
            $this->currency_id = 1;
        }

        $product = new Product();
        $product->name = $this->name;
       // $product->categoria_id = $this->categoria_id;
        $product->subcategory_id = $this->subcategory_id;
        $product->marca_id = $this->marca_id;
        $product->modelo_id = $this->modelo_id;
        $product->um_id = $this->um_id;
        $product->typeproduct = $this->typeproduct_id;
        $product->currency = $this->currency_id;
        $product->purchaseprice = $this->purchaseprice;
        $product->saleprice = $this->saleprice;
        $product->salepricemin = $this->salepricemin;
        $product->stock = $this->stock;
        $product->stockmin = $this->stockmin;
        $product->codigo = $this->codigo;
        $product->description = $this->description;
        $product->video = $this->video;
        $product->brochure = $urlbrochure;
        $product->state = $this->state;
        $product->titlegoogle = $this->titlegoogle;
        $product->descriptiongoogle = $this->descriptiongoogle;
        $product->keywordsgoogle = $this->keywordsgoogle;

        $product->image1 = $urlimage1;
        $product->image2 = $urlimage2;
        $product->image3 = $urlimage3;
        $product->image4 = $urlimage4;


        $prodcreado = $product->save();

        return redirect()->route('admin.product.index')->with('flash', 'Producto Creado con exito');

     }



}
