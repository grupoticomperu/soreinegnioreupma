<?php

namespace App\Http\Controllers\Admin;

use App\Models\Marca;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreMarcaRequest;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::all();
        return view('admin.marcas.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.marcas.create');
    }


    public function store(StoreMarcaRequest $request)
    {
        $marca = (new Marca)->fill($request->all());


        if($request->hasFile('imagen'))
        {
         $marca->imagen = Storage::disk('s3')->put('marcas', $request->file('imagen'), 'public');
        }

         $marca->save();

        //return redirect()->route('categories.index');
        //return back()->with('flash', 'Marca creado con exito');
        return redirect()->route('marca.index')->with('flash', 'Marca creado con exito');
    }


    public function show(Marca $marca)
    {
        return view('admin.marcas.show', compact('marca'));
    }


    public function edit(Marca $marca)
    {
        return view('admin.marcas.edit', compact('marca'));
    }


    public function update(Request $request, Marca $marca)
    {
        $request->validate([
            'name' => 'required',
            'imagen' =>'image'
        ]);
        // $category->update($request->all());

         $marca->update($request->all());

        if($request->hasFile('imagen')){

            $url = Storage::disk('s3')->put('marcas', $request->file('imagen'), 'public');
            if($marca->imagen){
                Storage::disk('s3')->delete($marca->imagen);
                $marca->update([
                    'imagen' => $url
                ]);
            }
        }


        return redirect()->route('marca.index')->with('flash', 'Marca actualizado con exito');


    }


    public function destroy(Marca $marca)
    {
        /* Marca::findOrFail($id)->delete();

        return redirect()->route('marca.index')->with('flash', 'Marca Eliminada con exito'); */

        $marca->delete();
        return redirect()->route('marca.index')->with('flash', 'Marca Eliminada con exito');


    }
}
