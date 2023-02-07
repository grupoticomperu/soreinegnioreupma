<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::create([
            'name' => 'Grúas de Auxilio Mecánico',
            'slug' => Str::slug('Grúas de Auxilio Mecánico'),
            'state'=>1,
            'categoria_id'=>1
        ]);

        Subcategory::create([
            'name' => 'Carrocerías Metálicas',
            'slug' => Str::slug('Carrocerías Metálicas'),
            'state'=>1,
            'categoria_id'=>1
        ]);

        Subcategory::create([
            'name' => 'Accesorios',
            'slug' => Str::slug('Accesorios'),
            'state'=>1,
            'categoria_id'=>1
        ]);

    }
}
