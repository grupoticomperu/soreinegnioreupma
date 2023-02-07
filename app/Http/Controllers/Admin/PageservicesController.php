<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pageservice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PageservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pageservice  $pageservice
     * @return \Illuminate\Http\Response
     */
    public function show(Pageservice $pageservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pageservice  $pageservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Pageservice $pageservice)
    {
        return view('admin.pageservices.edit', compact('pageservice'));
    }


    public function update(Request $request, Pageservice $pageservice)
    {
        $request->validate([
            'head1'=>'required',
            'image'=>'image'
        ]);

         $pageservice->update($request->all());

         if($request->hasFile('image'))
         {
            $pageservice->image = Storage::disk('s3')->put('pageservices', $request->file('image'), 'public');
         }


         $pageservice->update();

          return back()->with('flash', 'Datos de la Página actualizados con exito');
    }


    public function destroy(Pageservice $pageservice)
    {
        //
    }
}
