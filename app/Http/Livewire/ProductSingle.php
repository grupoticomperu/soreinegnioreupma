<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;

class ProductSingle extends Component
{

    public $product, $cant;
    public $name, $movil, $message, $email;

    protected $rules = [
        'name'=> 'required',
        'movil'=>'required',
        'message'=>'nullable',
        'email'=>'required'
    ];

    public function mount($product){
        $this->product = $product;
    }


    public function enviar(){
        $this->validate();
        Order::create([
            'name' => $this->name,
            'movil' => $this->movil,
            'message' => $this->message,
            'email' => $this->email,
            'product_id' => $this->product->id,
        ]);



       // return back()->('admin.product.index')->with('flash', 'Pedido Enviado con éxito');
        return back()->with('flash', 'Pedido Enviado con éxito');

    }



    public function render()
    {
        $subcatego = $this->product->subcategory;
        $productrelacionado = Product::where('subcategory_id',$subcatego->id )
                                        ->where('id','<>', $this->product->id )->get();
        //dd($productrelacionado);
        $this->cant = $productrelacionado->count();
        if($this->cant > 4)
        {
            $this->cant = 4;
        }

        return view('livewire.product-single', compact('productrelacionado'));

    }
}
