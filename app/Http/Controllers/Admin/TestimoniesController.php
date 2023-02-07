<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniesController extends Controller
{

    public function index()
    {
        $testimonies = Testimony::all();
        return view('admin.testimonies.index', compact('testimonies'));
    }


    public function create()
    {
        return view('admin.testimonies.create');
    }


    public function store(Request $request)
    {
        $this->validate(request(), [
    		'name' => 'required'
    	]);

        $testimonies = (new Testimony)->fill($request->all());

        if($request->hasFile('image'))
        {
            $testimonies->image = Storage::disk('s3')->put('testimonies', $request->file('image'), 'public');
            //$works->image = $request->file('image')->store('public/work/image');
        }

        $testimonies->save();

        return redirect()->route('testimonies.index')->with('flash', 'Testimonio creado con exito');
    }


    public function show(Testimony $testimony)
    {
        //
    }


    public function edit(Testimony $testimony)
    {
        return view('admin.testimonies.edit', compact('testimony'));
    }


    public function update(Request $request, Testimony $testimony)
    {
        $this->validate(request(), [
    		'name' => 'required'
    	]);

        $testimony->update($request->all());



        if($request->hasFile('image')){

            $url = Storage::disk('s3')->put('testimonies', $request->file('image'), 'public');
            if($testimony->image){
                Storage::disk('s3')->delete($testimony->image);
                $testimony->update([
                    'image' => $url
                ]);
            }else{
                //estaba puesto create pero era cuando hay otra tabla para imagenes
                $testimony->update([
                    'image' => $url
                ]);
            }
        }


        return redirect()->route('testimonies.index')->with('flash', 'Testimonio Actualizado con exito');
    }


    public function destroy(Testimony $testimony)
    {
        if($testimony->image){
            Storage::disk('s3')->delete($testimony->image);
        }
        $testimony->delete();
        return redirect()->route('testimonies.index')->with('flash', 'Testimonio Eliminado con éxito');;
    }
}
