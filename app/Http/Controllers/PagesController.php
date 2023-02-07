<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Post;
use App\Models\Work;
use App\Models\About;
use App\Models\Marca;
use App\Models\Offer;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Hometwo;
use App\Models\Hosting;
use App\Models\Service;
use App\Models\Category;
use App\Models\Categoria;
use App\Models\Homethree;
use App\Models\testimony;
use App\Models\Homeservice;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\Subcategoryhosting;
use App\Models\Subcategoryservice;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
//use Illuminate\Support\Facades\Artisan;

class PagesController extends Controller
{
       // use Artisan;


        public function home(){

			//$slider = Slider::where('state', 1)->first();
            $slider = Slider::where('state', 1)->get();
            $configurations = Configuration::all()->first();
            //$categoriesproductos = Categoria::all();
            $subcategories = Subcategory::where('state', 1)
                            ->where('categoria_id', 1)->get();
           // $marcas = Marca::all();
            //$subcategories = Subcategory::all();
			//$offers = Offer::where('state', 1)->get();
			//$homeservices = Homeservice::all();
			$homeservice = Homeservice::where('state', 1)->first();
            $offers = Offer::where('state', 1)->get();
            //$offers = Offer::all();

            $hometwo = Hometwo::all()->first();
            $homethree = Homethree::all()->first();

			/*$subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
			$hostings = Hosting::where('state', 1)->get(); */
			//return $subcategories; poner get
	       /* return view('welcome', compact('sliders', 'offers','homeservices','configurations', 'subcategories', 'subcategoriesd', 'hostings')); */
           return view('welcome', compact('slider','configurations','homeservice', 'subcategories','hometwo','homethree', 'offers'));
	    }


         public function links(){
            //return 'Hola';
            //Artisan::call('storage:link');
             if(file_exists(public_path('storage'))){
                return 'the "public_html/storage" directoory already exists';
            }


             app('files')->link(
                storage_path('app/public_html'), public_path('storage')
            );

           // return 'the "public_html/storage" directoory has bee linked';

         }


         public function servicios(){
			//$posts = \App\Models\Post::latest('published_at')->paginate(5);
			 //$posts = Post::published()->get() ;
             $services = Service::all();
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
			return view('famaicservices', compact('configurations', 'subcategories', 'posts', 'blogs', 'abouts', 'services'));
		 }




        public function blog(){
			//$posts = \App\Models\Post::latest('published_at')->paginate(5);
			 //$posts = Post::published()->get() ;
			 $posts = Post::published()->paginate(2);
			//$sliders = Slider::all();
			// $offers = Offer::all();
			// $homeservices = Homeservice::all();
			 $blogs = Blog::all()->first();
			 $categories = Category::all();
			 $configurations = Configuration::all()->first();
			 $subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
			 $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
			 //return $subcategories; poner get
			return view('blog', compact('configurations', 'subcategories', 'subcategoriesd', 'posts', 'blogs','categories'));
		 }


		 public function proyectos(){
			//$posts = \App\Models\Post::latest('published_at')->paginate(5);
			 //$posts = Post::published()->get() ;
			// $posts = Post::published()->paginate(2);
			 $works = Work::latest('id')->paginate(12);

			//$sliders = Slider::all();
			// $offers = Offer::all();
			// $homeservices = Homeservice::all();
			// $blogs = Blog::all()->first();
			 //$categories = Category::all();
			 $configurations = Configuration::all()->first();
			 $subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
			 $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
			 //return $subcategories; poner get
			return view('proyectosweb', compact('configurations', 'subcategories', 'subcategoriesd', 'works'));
		 }


		 public function showp(Work $work){//aqui por defecto busca por id y no es necesario poner 	$post = Post::find($id)

			//$posts = \App\Models\Post::latest('published_at')->get();
			//$post = Post::find($post);
			/* $blogs = Blog::all()->first();
			$categories = Category::all(); */
			$works = Work::all();
			$configurations = Configuration::all()->first();
			$subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
			$subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();


				 return view('singleproyectosweb', compact('works','work','configurations','subcategories','subcategoriesd'));


			 abort(404);
			//return view('errors.404');

		}








		public function store(Request $request)
		{
			 $validated = $request->validate([
				'nombres' => 'required',
				'celular' => 'required',
				'mensaje' => 'required',
				'email' => 'required|email',
                //'g-recaptcha-response' => 'required|captcha',
			]);

		  $contact = Contact::create([
			'nombres' => $request->get('nombres'),
			'celular' => $request->get('celular'),
			'mensaje' => $request->get('mensaje'),
			'email' => $request->get('email')

		]);


		   //  $tag->save();

			//return redirect()->route('categories.index');
			return back()->with('flash', 'Mensaje Enviado, gracias por Contactar');
		}




        public function testimonios(){
			//$posts = \App\Models\Post::latest('published_at')->paginate(5);
			 //$posts = Post::published()->get() ;
			// $posts = Post::published()->paginate(2);
			 //$works = Work::latest('id')->paginate(12);

			//$sliders = Slider::all();
			// $offers = Offer::all();
			// $homeservices = Homeservice::all();
			// $blogs = Blog::all()->first();
			 //$categories = Category::all();
             $testimonies = testimony::all();
			 $configurations = Configuration::all()->first();
			 $subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
			 $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
			 //return $subcategories; poner get
			return view('testimonios', compact('configurations', 'subcategories', 'subcategoriesd', 'testimonies'));
		 }




}

