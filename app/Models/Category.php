<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    //protected $guarded = [];//deshabilita la asignacion masiva
    protected $fillable =[
        'name','url','imagen', 'title', 'description', 'keywords'
    ];

    public function getRouteKeyName()
    {
    	return 'url';
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['url'] = str::slug($name);

    }


    public function posts()
    {
    	return $this->hasmany(Post::class);

    }

}
