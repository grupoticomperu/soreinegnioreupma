<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hometwo;
use App\Models\Homethree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function edit(Hometwo $hometwo)
    {
        $hometwo = Hometwo::first();
        //return $configuration;
        return view('admin.hometwos.edit', compact('hometwo'));
    }

    public function editthree(Homethree $homethree)
    {
        $homethree = Homethree::first();
        //return $configuration;
        return view('admin.homethrees.edit', compact('homethree'));
    }


    public function update(Request $request, Hometwo $hometwo)
    {

         $request->validate([
            'title1'=>'required',
            'image1'=>'image'
        ]);


        $hometwo->update($request->all());

        if($request->hasFile('image1')){

            $url = Storage::disk('s3')->put('hometwo', $request->file('image1'), 'public');
            if($hometwo->image1){
                Storage::disk('s3')->delete($hometwo->image1);
                $hometwo->update([
                    'image1' => $url
                ]);
            }else{
                $hometwo->update([
                    'image1' => $url
                ]);
            }
        }


        if($request->hasFile('image2')){

            $url = Storage::disk('s3')->put('hometwo', $request->file('image2'), 'public');
            if($hometwo->image2){
                Storage::disk('s3')->delete($hometwo->image2);
                $hometwo->update([
                    'image2' => $url
                ]);
            }else{
                $hometwo->update([
                    'image2' => $url
                ]);
            }
        }


        return back()->with('flash', 'Dato actualizado con exito');


    }






    public function updatethree(Request $request, Homethree $homethree)
    {

         $request->validate([
            'title1'=>'required',
            'image1'=>'image'
        ]);


        $homethree->update($request->all());

        if($request->hasFile('image1')){

            $url = Storage::disk('s3')->put('homethree', $request->file('image1'), 'public');
            if($homethree->image1){
                Storage::disk('s3')->delete($homethree->image1);
                $homethree->update([
                    'image1' => $url
                ]);
            }else{
                $homethree->update([
                    'image1' => $url
                ]);
            }
        }


        if($request->hasFile('image2')){

            $url = Storage::disk('s3')->put('homethree', $request->file('image2'), 'public');
            if($homethree->image2){
                Storage::disk('s3')->delete($homethree->image2);
                $homethree->update([
                    'image2' => $url
                ]);
            }else{
                $homethree->update([
                    'image2' => $url
                ]);
            }
        }


        if($request->hasFile('image3')){

            $url = Storage::disk('s3')->put('homethree', $request->file('image3'), 'public');
            if($homethree->image3){
                Storage::disk('s3')->delete($homethree->image3);
                $homethree->update([
                    'image3' => $url
                ]);
            }else{
                $homethree->update([
                    'image3' => $url
                ]);
            }
        }

        if($request->hasFile('image4')){

            $url = Storage::disk('s3')->put('homethree', $request->file('image4'), 'public');
            if($homethree->image4){
                Storage::disk('s3')->delete($homethree->image4);
                $homethree->update([
                    'image4' => $url
                ]);
            }else{
                $homethree->update([
                    'image4' => $url
                ]);
            }
        }


        return back()->with('flash', 'Dato actualizado con exito');


    }








}
