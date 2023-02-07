<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Pagecontact;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\Subcategoryhosting;
use App\Models\Subcategoryservice;

class PagecontactController extends Controller
{

    public function index()
    {
        $abouts = About::all()->first();
        $pagescontacts = Pagecontact::all()->first();
        $configurations = Configuration::all()->first();
        $subcategories = Subcategory::where('state', 1)
                            ->where('categoria_id', 1)->get();
        //$subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
        $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();

        return view('contact', compact('pagescontacts','configurations', 'subcategories', 'subcategoriesd', 'abouts'));
    }
}
