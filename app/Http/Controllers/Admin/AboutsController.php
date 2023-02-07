<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutsController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(About $about)
    {
        //
    }


    public function edit(About $about)
    {
        $about = About::first();
        //return $abouts;
        return view('admin.abouts.edit', compact('about'));
    }


    public function update(Request $request, About $about)
    {


        $about->update($request->all());

/*         if($request->file('imagen1')){
            $url = Storage::put('hostingperu/about', $request->file('imagen1'));
            if($about->imagen1){
                Storage::delete($about->imagen1);
                $about->update([
                    'imagen1' => $url
                ]);
            }else{
                $about->create([
                    'imagen1' => $url
                ]);
            }
        } */



        if($request->hasFile('imagenbaner')){

            $url = Storage::disk('s3')->put('about', $request->file('imagenbaner'), 'public');
           // $url = Storage::put('public/about', $request->file('imagenbaner'));
            if($about->imagenbaner){
                //Storage::delete($about->imagenbaner);
                Storage::disk('s3')->delete($about->imagenbaner);
                $about->update([
                    'imagenbaner' => $url
                ]);
            }
        }




        if($request->hasFile('imagen1')){

            $url = Storage::disk('s3')->put('about', $request->file('imagen1'), 'public');
           // $url = Storage::put('public/about', $request->file('imagen1'));
            if($about->imagen1){
                //Storage::delete($about->imagen1);
                Storage::disk('s3')->delete($about->imagen1);
                $about->update([
                    'imagen1' => $url
                ]);
            }
        }






        if($request->hasFile('imagen2')){

            $url = Storage::disk('s3')->put('about', $request->file('imagen2'), 'public');
            //$url = Storage::put('public/about', $request->file('imagen2'));
            if($about->imagen2){
                Storage::disk('s3')->delete($about->imagen2);
                //Storage::delete($about->imagen2);
                $about->update([
                    'imagen2' => $url
                ]);
            }
        }


        if($request->hasFile('imagen3')){

            $url = Storage::disk('s3')->put('about', $request->file('imagen3'), 'public');
            //$url = Storage::put('public/about', $request->file('imagen3'));
            if($about->imagen3){
                Storage::disk('s3')->delete($about->imagen3);
                //Storage::delete($about->imagen3);
                $about->update([
                    'imagen3' => $url
                ]);
            }
        }



        return back()->with('flash', 'Datos actualizados con exito');

    }


    public function destroy(About $about)
    {
        //
    }
}
