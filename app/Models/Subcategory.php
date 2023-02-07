<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function getRouteKeyName()
    {
        return 'slug';
        //return ('title');
    }



    //para guardar el slug
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = str::slug($name);

    }



    //Relaion uno a muhos inversa
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    //Relacion uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }


}
