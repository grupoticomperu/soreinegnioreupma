<?php

namespace Database\Seeders;

use App\Models\Um;
use Illuminate\Database\Seeder;

class UmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Um::create([
            'name' => 'metros',
            'slug' => 'metros',
            'abbreviation' => 'm',
            'state' => 1,
        ]);


        Um::create([
            'name' => 'unidades',
            'slug' => 'unidades',
            'abbreviation' => 'u',
            'state' => 1,
        ]);


        Um::create([
            'name' => 'docena',
            'slug' => 'docena',
            'abbreviation' => 'doc',
            'state' => 1,
        ]);

        Um::create([
            'name' => 'ciento',
            'slug' => 'ciento',
            'abbreviation' => 'cien',
            'state' => 1,
        ]);
    }
}
