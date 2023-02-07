<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'name' => 'Fabricación de productos',
            'slug' => Str::slug('Fabricación de productos'),
            'state'=>1,
        ]);

        Categoria::create([
            'name' => 'Servicios',
            'slug' => Str::slug('Servicios'),
            'state'=>1,
        ]);



    }
}
