<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.create');
    }


    public function store(StoreCategoriaRequest $request)
    {

        // $category = Category::create($request->all());
        $category = (new Categoria)->fill($request->all());


        if($request->hasFile('image'))
        {
         //$category->image = $request->file('image')->store('public');
         $category->image = Storage::disk('s3')->put('categoriasproductos', $request->file('image'), 'public');
        }

         $category->save();

        return redirect()->route('categoria.index')->with('flash', 'Categoria creado con exito');
        //return view('admin.categorias.index', compact('categorias'));
        //return back()->with('flash', 'Categoria creado con exito');
    }


    public function show(Categoria $categorium)
    {
        return view('admin.categorias.show', compact('categorium'));
    }


    public function edit(Categoria $categorium)
    {
        return view('admin.categorias.edit', compact('categorium'));
    }


    public function update(Request $request, Categoria $categorium)
    {

        $request->validate([
            'image'=>'image'
        ]);

         $categorium->update($request->all());


        if($request->hasFile('image')){

            $url = Storage::disk('s3')->put('categoriasproductos', $request->file('image'), 'public');
            if($categorium->image){
                Storage::disk('s3')->delete($categorium->image);
                $categorium->update([
                    'image' => $url
                ]);
            }else{
                $categorium->create([
                    'image' => $url
                ]);
            }
        }





/*         if($request->hasFile('imagen'))
        {
         $categorium->imagen = $request->file('imagen')->store('public');
        } */
        //public se refiere a storage/app/public
        // $category->update($request->all());
        $categorium->update();
        //$categorium->update($request->only('nombre'));
         return redirect()->route('categoria.index')->with('flash', 'Categoria actualizado con exito');
        // return back()->with('flash', 'Categoria actualizado con exito');
    }


    public function destroy($id)
    {
        Categoria::findOrFail($id)->delete();

        return redirect()->route('categoria.index')->with('flash', 'Categoria Eliminada con exito');
    }
}
