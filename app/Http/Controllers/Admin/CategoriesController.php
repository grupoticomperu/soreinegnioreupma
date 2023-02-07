<?php
namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }



    public function store(StoreCategoryRequest $request)
    {
       // $category = Category::create($request->all());
        $category = (new Category)->fill($request->all());


        if($request->hasFile('imagen'))
        {
         $category->imagen = $request->file('imagen')->store('public/categoriesblog');
        }

         $category->save();

        //return redirect()->route('categories.index');
        return back()->with('flash', 'Categoria creado con exito');
    }


    public function show(Category $category)
    {
       // $category = Category::findOrFail($id);
        return view('admin.categories.show', compact('category'));
    }


    public function edit(Category $category)
    {
       // $categories = Category::findOrFail($category);
        return view('admin.categories.edit', compact('category'));
    }


    public function update(Request $request, Category $category)
    {

        $this->validate(request(), [
    		'name' => ['required', Rule::unique('categories')->ignore($category->id)],
            'image'=>'image',


    	]);

       // $categories = Category::findOrFail($id);
         //return $request->all();
         //dd($request->file('imagen'));
        //dd($request->file('imagen')->store('public'));
        if($request->hasFile('imagen'))
        {
         $category->imagen = $request->file('imagen')->store('public/categoriesblog');
        }
        //public se refiere a storage/app/public
         $category->update($request->all());
        //$category->update($request->only('name'));
         return redirect()->route('categories.index')->with('flash', 'Categoria actualizado con exito');
        // return back()->with('flash', 'Categoria actualizado con exito');

    }



    public function destroy($id)
    {

        Category::findOrFail($id)->delete();

        return redirect()->route('categories.index')->with('flash', 'Categoria Eliminada con exito');

    }
}
