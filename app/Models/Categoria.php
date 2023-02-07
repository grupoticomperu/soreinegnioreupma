<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable =[
        'name','slug','state','image','shortdescription','longdescription','order','title','description','keywords'
    ];

    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = str::slug($name);

    }

    public function subcategories()
    {
    	return $this->hasmany(Subcategory::class);

    }

}
