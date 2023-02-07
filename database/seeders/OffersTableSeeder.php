<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Offer;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Offer::create([
            'image' => 'grua2.svg',
            'title' => 'FABRICACIÓN DE GRÚAS',
            'description' => 'Diseño y fabricación de grúas de plataforma deslizante y de arrastre.',
            'url' => '#',
            'state'=>1,
            'texto' => 'Ver más',
            'user_id'=> 1
        ]);

        Offer::create([
            'image' => 'accesorios2.svg',
            'title' => 'MANTENIMIENTO',
            'description' => 'Diseño, fabricación y mantenimiento de carrocerías metálicas.',
            'url' => '#',
            'state'=>1,
            'texto' => 'Ver más',
            'user_id'=> 1
        ]);

        Offer::create([
            'image' => 'mantenimiento2.svg',
            'title' => 'ACCESORIOS',
            'description' => 'Suministro e instalación de accesorios de hidráulica, como bombas, toma fuerzas.',
            'url' => '#',
            'state'=>1,
            'texto' => 'Ver más',
            'user_id'=> 1
        ]);

        Offer::create([
            'image' => 'servicio.svg',
            'title' => 'SERVICIO',
            'description' => 'Servicio de corte, doblez, torno y maquinado de piezas para la minería e industria.',
            'url' => '#',
            'state'=>1,
            'texto' => 'Ver más',
            'user_id'=> 1
        ]);

    }
}
