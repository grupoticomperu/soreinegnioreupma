<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

/*     protected $fillable =[
        'titulo','resumen','iframe','descripcion','precio','cantidad','published_at','category_id', 'user_id'
    ]; */

    protected $guarded = ['id'];

    const NUEVO = 1;
    const USADO = 2;
    const SOLES = 1;
    const DOLARES = 2;


    public function getRouteKeyName()
    {
        return 'slug';
        //return ('title');
    }

    protected $dates = ['published_at'];


    //para guardar el slug
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = str::slug($name);

    }




    //Relacion uno a muchos inversa
    public function marca(){
        return $this->belongsTo(Marca::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }



}
