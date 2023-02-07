<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pagecontact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PagecontactController extends Controller
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


    public function show(Pagecontact $pagecontact)
    {
        //
    }


    public function edit(Pagecontact $pagecontact)
    {
       // $pagecontact = Pagecontact::first();
        //return $pagecontac;
        return view('admin.pagecontacs.edit', compact('pagecontact'));
    }

    public function update(Request $request, Pagecontact $pagecontact)
    {
        $request->validate([
            'title'=>'required',
            'imagen'=>'image'
        ]);

         $pagecontact->update($request->all());

         if($request->hasFile('imagen'))
         {
            //$pagecontact->logo = Storage::disk('s3')->put('hostingperu/pagecontacts', $request->file('logo'), 'public');
            $pagecontact->imagen = Storage::disk('s3')->put('pagecontacts', $request->file('imagen'), 'public');
           // $pagecontact->logo = $request->file('logo')->store('public/pagecontacts');
         }


         $pagecontact->update();

          return back()->with('flash', 'Datos de la Página de Contactos actualizado con exito');
    }


    public function destroy(Pagecontact $pagecontact)
    {
        //
    }
}
