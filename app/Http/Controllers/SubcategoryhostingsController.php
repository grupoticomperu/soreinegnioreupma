<?php

namespace App\Http\Controllers;
use App\Models\Why;
use App\Models\About;
use App\Models\Hosting;
use App\Models\Product;
use App\Models\Question;
use App\Models\Categoria;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\Subcategoryhosting;
use App\Models\Subcategoryservice;
//use App\Models\Service;


class SubcategoryhostingsController extends Controller
{
    public function show(Subcategoryhosting $subcategoryhosting){
       // $service = Service::where('subcategoryservice_id', $subcategoryservice->id)->first();
        $hostings = Hosting::where('subcategoryhosting_id', $subcategoryhosting->id)->get();
        $title = $subcategoryhosting->name;
        $image = $subcategoryhosting->image;
       // return $title;
        $configurations = Configuration::all()->first();
        $subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
        $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
        $whies = Why::where('clasification', 1)->get();
        $questions = Question::where('clasification', 1)->get();
       // return $service;
        //return $subcategories; poner get
       return view('hosting', compact('subcategoryhosting','hostings','title','configurations','subcategories', 'subcategoriesd', 'image', 'whies','questions'));
    }


    public function showproduct(Subcategory $subcategory){
        // $service = Service::where('subcategoryservice_id', $subcategoryservice->id)->first();

         //$products = Product::where('subcategory_id', $subcategory->id)->get();
/*          $title = $subcategory->name;
         $description = $subcategory->description; */
         $products = Product::where('subcategory_id', $subcategory->id)->paginate(30);
         $image = $subcategory->image;
         $abouts = About::all()->first();
        // return $title;
         $configurations = Configuration::all()->first();

         $questions = Question::where('clasification', 1)->get();
         $categoriesproductos = Categoria::all();
         $subcategories = Subcategory::where('state', 1)
                            ->where('categoria_id', 1)->get();
        //dd($categoriesproductos);
        // return $service;
         //return $subcategories; poner get
        //return view('products', compact('categoriesproductos','products','title','configurations','subcategories', 'subcategoriesd', 'image', 'whies','questions', 'subcategory'));
        return view('products', compact('categoriesproductos','configurations','image', 'questions', 'subcategory','subcategories','abouts', 'products'));
     }


     public function showproductvyv(){
        // $service = Service::where('subcategoryservice_id', $subcategoryservice->id)->first();

         //$products = Product::where('subcategory_id', $subcategory->id)->get();
/*          $title = $subcategory->name;
         $description = $subcategory->description; */
        // $image = $subcategory->image;
        // return $title;
         $configurations = Configuration::all()->first();

         $questions = Question::where('clasification', 1)->get();
         $categoriesproductos = Categoria::all();
        //dd($categoriesproductos);
        // return $service;
         //return $subcategories; poner get
        //return view('products', compact('categoriesproductos','products','title','configurations','subcategories', 'subcategoriesd', 'image', 'whies','questions', 'subcategory'));
        return view('productos', compact('categoriesproductos','configurations', 'questions'));
     }

     public function showproductp(Product $product){
        // $service = Service::where('subcategoryservice_id', $subcategoryservice->id)->first();

         //$products = Product::where('subcategory_id', $subcategory->id)->get();
         //$title = 'hola';//$subcategory->name;
         //$image = 'chau';//$subcategory->image;
        // return $title;
        $abouts = About::all()->first();
         $configurations = Configuration::all()->first();

         $questions = Question::where('clasification', 1)->get();
         $categoriesproductos = Categoria::all();
         $subcategories = Subcategory::where('state', 1)
                            ->where('categoria_id', 1)->get();
        //dd($categoriesproductos);
        // return $service;
         //return $subcategories; poner get
        //return view('products', compact('categoriesproductos','products','title','configurations','subcategories', 'subcategoriesd', 'image', 'whies','questions', 'subcategory'));
        return view('famaicsingleproduct', compact('product', 'categoriesproductos','configurations','questions', 'abouts','subcategories'));
     }


}
