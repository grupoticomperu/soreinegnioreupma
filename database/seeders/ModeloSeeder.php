<?php

namespace Database\Seeders;

use App\Models\Modelo;
use Illuminate\Database\Seeder;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modelo::create([
            'name' => 'Té Divina',
            'slug'=>'te-divina',
            'state' => 1,
        ]);


    }
}
