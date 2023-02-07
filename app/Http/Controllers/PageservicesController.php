<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use App\Models\Post;
use App\Models\About;
use App\Models\Service;
use App\Models\Pageservice;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\Subcategoryhosting;

class PageservicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $pageservice = Pageservice::all()->first();
        $abouts = About::all()->first();
        $posts = Post::published()->paginate(2);
       //$sliders = Slider::all();
       // $offers = Offer::all();
       // $homeservices = Homeservice::all();
        $blogs = Blog::all()->first();
        //$categories = Category::all();
        $subcategories = Subcategory::where('state', 1)
                       ->where('categoria_id', 1)->get();
        $configurations = Configuration::all()->first();

        $subcategories = Subcategory::where('state', 1)
        ->where('categoria_id', 1)->get();

        //$subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
        //$subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
        //return $subcategories; poner get
       return view('famaicservices', compact('configurations', 'subcategories', 'posts', 'blogs', 'abouts', 'services', 'pageservice'));
    }
}
