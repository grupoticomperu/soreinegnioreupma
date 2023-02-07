<?php

namespace Database\Seeders;
use App\Models\Hometwo;
use App\Models\Homethree;
use App\Models\Configuration;
use Illuminate\Database\Seeder;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            'logo' => 'configurations/pmGuDKQVzEHQG1FuSSZqtPsh8MhEHMNRdfGUrKi1.png',
            'icon' => 'configurations/y0wreDcpZhH7MRCrjHA7svuw0rp4JguQng4C0i6b.jpg',
            'telephono' => '(511) 5314845',
            'movil' => '998374107',
            'facebook' => '#',
            'youtube' => '#',
            'instagram' => '#',
            'description' => 'fabricación y mantenimiento de grúas para auxilio automotriz, carrocerías de metal y componentes de hidráulica móvil. También nos hacemos cargo del diseño, suministro e instalación de accesorios de hidráulica (como bombas, tomafuerzas, cilindros hidráulicos, winches, válvulas de distribución, etc), así como el montaje, instalación y mantenimiento de grúas articuladas.',
            'email' => 'ventas@ampueroingenieros.com',
            'address' => 'AV. ANGÉLICA GAMARRA 2846, SAN MARTÍN DE PORRES.',
            'user_id'=> 1
        ]);

        Hometwo::create([
            'title1' => 'titulo 1 famaic',
            'title2' => 'titulo 2 famaic',
            'title3' => 'titulo 3 famaic',
            'iconsubtitle1' => 'flaticon-box-1',
            'user_id'=> 1
        ]);

        Homethree::create([
            'title1' => 'titulo 1 famaic',
            'title2' => 'titulo 2 famaic',
            'title3' => 'titulo 3 famaic',

            'user_id'=> 1
        ]);
    }
}
