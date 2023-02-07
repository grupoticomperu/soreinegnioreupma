<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        $marcas = Marca::all();
        return view('admin.posts.create',compact('categories','marcas'));
    }



    public function store(Request $request)
    {
       // $this->authorize('create', new Product());

        $this->validate($request, [
            'titulo' => 'required'
        ]);

        $product = Product::create([
            //$request->only('titulo')
            'titulo' => $request->get('titulo'),
            'user_id' => auth()->id()
        ]);

        return redirect()->route('admin.product.edit', $product);
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //$this->authorize('update', $post);
        //$this->authorize('view', $post);

        $categorias = Categoria::all();
        $marcas = Marca::all();
    	//$tags = Tag::all();
    	return view('admin.products.edit',compact('categorias','product','marcas'));
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy($id)
    {
        //$product->delete();
        Product::findOrFail($id)->delete();

        return redirect()->route('admin.product.index')->with('flash', 'Categoria Eliminada con exito');
    }
}
