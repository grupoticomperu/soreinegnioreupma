<?php

namespace App\Http\Livewire\Admin;
use App\Models\Um;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Categoria;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Validation\Rule;

class ProductEdit extends Component
{

    use WithFileUploads;
    public $categoria_id, $subcategory_id, $marca_id="", $modelo_id="", $um_id="", $currency="", $typeproduct="";
    public $purchaseprice, $saleprice, $salepricemin, $stock, $stockmin, $state;
    public $name, $slug, $description, $image1, $image1back, $image2, $image2back, $image3, $image3back, $image4, $image4back, $brochure, $brochureback, $codigo, $video;
    public $categories=[], $subcategories=[], $modelos = [], $marcas = [], $ums = [];
    public $titlegoogle, $descriptiongoogle, $keywordsgoogle;
    //public $product;



    public function render()
    {
        return view('livewire.admin.product-edit')->extends('admin.layout');
    }


    protected $rules = [
        'name'=> 'required',
        'categoria_id' => 'required',
        'subcategory_id' => 'required',
        'marca_id' => 'required',
        'modelo_id' => 'nullable',
        'um_id'=>'nullable',
        'typeproduct'=> 'nullable',
        'currency' => 'nullable',
        'purchaseprice'=> 'nullable',
        'saleprice'=> 'required',
        'salepricemin'=> 'nullable',
        'stock'=> 'nullable',
        'stockmin'=> 'nullable',
        'codigo'=>'nullable',
        'description'=> 'required',
        'video' =>'nullable',
        //'brochure'=> 'nullable',
        'state'=> 'required',
        'titlegoogle'=> 'nullable',
        'descriptiongoogle'=> 'nullable',
        'keywordsgoogle'=> 'nullable',
 /*        'image1'=> '',
        'image2'=>'',
        'image3'=> '',
        'image4'=> '', */
    ];


/*     public function edit(Product $product){
        $this->product = $product;
    } */

    public function mount(Product $product){
        //dd($product->name);
        //$this->product = $product;
        $this->image1 = null;
        $this->product = $product;
        $this->name = $this->product->name;

        $this->categories = Categoria::all();
       // $this->categoria_id = $this->product->categoria_id;
        $this->categoria_id = $this->product->subcategory->categoria->id;
        $this->subcategories = Subcategory::where('categoria_id', $this->categoria_id)->get();
        $this->subcategory_id = $this->product->subcategory_id;
        $this->marcas = Marca::all();
        $this->marca_id = $this->product->marca_id;
        $this->modelos = Modelo::all();
        $this->modelo_id = $this->product->modelo_id;
        $this->ums = Um::all();
        $this->um_id = $this->product->um_id;
        $this->typeproduct = $this->product->typeproduct;
        $this->currency = $this->product->currency;
        $this->purchaseprice = $this->product->purchaseprice;
        $this->saleprice = $this->product->saleprice;
        $this->salepricemin = $this->product->salepricemin;
        $this->stock = $this->product->stock;
        $this->stockmin = $this->product->stockmin;
        $this->codigo = $this->product->codigo;
        $this->description = $this->product->description;
        $this->video = $this->product->video;
        $this->brochureback = $this->product->brochure;
        $this->state = $this->product->state;
        $this->titlegoogle = $this->product->titlegoogle;
        $this->descriptiongoogle = $this->product->descriptiongoogle;
        $this->keywordsgoogle = $this->product->keywordsgoogle;
        $this->image1back = $this->product->image1;
        $this->image2back = $this->product->image2;
        $this->image3back = $this->product->image3;
        $this->image4back = $this->product->image4;

        $this->slug = $this->product->slug;


    }


    public function save(){
        //dd($this->description);
        $rules = $this->rules;
        $rules['name'] = 'required|unique:products,name,'.$this->product->id;
       // dd($this->image1);

       if($this->brochure){
            $rules['brochure'] ='max:2048';
            $this->validate($rules);
            //Storage::delete([$this->product->brochure]);
            //$brochure = $this->brochure->store('brochureproducts', 'public');
            //$urlbrochure = Storage::url($brochure);
            Storage::disk('s3')->delete([$this->product->brochure]);
            $urlbrochure = Storage::disk('s3')->put('brochureproducts', $this->brochure , 'public');
        }
        else {
            $this->validate();
            $urlbrochure = null;
        }


        if($this->image1){
           // dd($this->image);
            $rules['image1'] ='required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
            $this->validate($rules);
            //Storage::delete([$this->product->image1]);
            //$this->product->image1 = Storage::url($this->image1->store('products', 'public'));
            //$image11 = $this->product->image1;
            Storage::disk('s3')->delete([$this->product->image1]);
            $image11 = Storage::disk('s3')->put('products', $this->image1 , 'public');
        }else{
           // dd($this->image);
            $image11 = $this->product->image1;
            $this->validate($rules);
        }


        if($this->image2){
            // dd($this->image);
             $rules['image2'] ='required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
             $this->validate($rules);
             //Storage::delete([$this->product->image2]);
             //$this->product->image2 = Storage::url($this->image2->store('products', 'public'));
            // $image22 = $this->product->image2;
            Storage::disk('s3')->delete([$this->product->image2]);
            $image22 = Storage::disk('s3')->put('products', $this->image2 , 'public');
         }else{
            // dd($this->image);
             $image22 = $this->product->image2;
             $this->validate($rules);
         }

         if($this->image3){
            // dd($this->image);
             $rules['image3'] ='required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
             $this->validate($rules);
             //Storage::delete([$this->product->image3]);
             //$this->product->image3 = Storage::url($this->image3->store('products', 'public'));
             //$image33 = $this->product->image3;
             Storage::disk('s3')->delete([$this->product->image3]);
             $image33 = Storage::disk('s3')->put('products', $this->image3 , 'public');
         }else{
            // dd($this->image);
             $image33 = $this->product->image3;
             $this->validate($rules);
         }


         if($this->image4){
            // dd($this->image);
             $rules['image4'] ='required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';//validamos la imagen
             $this->validate($rules);//validamos con rules
             //Storage::delete([$this->product->image4]);//borramos imagen existente
             //$this->product->image4 = Storage::url($this->image4->store('products', 'public'));//guardamos y creamos la ruta
             //$image44 = $this->product->image4;//creamos la variable image44 para que no haya conflicto con image4 de la carga de imagenes temporales en la vista
             Storage::disk('s3')->delete([$this->product->image4]);
             $image44 = Storage::disk('s3')->put('products', $this->image4 , 'public');
         }else{
            // dd($this->image);
             $image44 = $this->product->image4;//le asignamos a la variable image44
             $this->validate($rules);
         }




         if($this->modelo_id==""){
            $this->modelo_id= null;
        }

        if($this->um_id==""){
            $this->um_id = null;
        }

/*         if($this->currency==""){
            $this->currency = null;
        } */

        if($this->typeproduct==""){
            $this->typeproduct = 1;
        }

         if($this->currency==""){
            $this->currency = 1;
        }



      //  $this->validate();
        $this->product->update([
            'name' => $this->name,
            'categoria_id'=> $this->categoria_id,
            'subcategory_id' => $this->subcategory_id,
            'marca_id' => $this->marca_id,
            'modelo_id' => $this->modelo_id,
            'um_id' => $this->um_id,
            'typeproduct' => $this->typeproduct,
            'currency' => $this->currency,
            'purchaseprice' => $this->purchaseprice,
            'saleprice' => $this->saleprice,
            'salepricemin' => $this->salepricemin,
            'stock' => $this->stock,
            'stockmin' => $this->stockmin,
            'codigo' => $this->codigo,
            'description' => $this->description,
            'video' => $this->video,
            'brochure' => $urlbrochure,
            'state' => $this->state,
            'titlegoogle' => $this->titlegoogle,
            'descriptiongoogle' => $this->descriptiongoogle,
            'keywordsgoogle' => $this->keywordsgoogle,
            'image1' => $image11,
            'image2' => $image22,
            'image3' => $image33,
            'image4' => $image44,

        ]);

        return redirect()->route('admin.product.index')->with('flash', 'Producto Actualizado con exito');

    }

    public function updatedCategoriaId($value){
        $this->subcategories = Subcategory::where('categoria_id', $value)->get();
        /* $this->reset(['subcategory_id', 'brand_id']); */
        $this->product->subcategory_id = "";
    }

/*     public function updatedName($value){
        $this->slug = Str::slug($value);
    } */
/*     public function getSubcategoryProperty(){
        return Subcategory::find($this->product->subcategoria_id);
    } */

}
