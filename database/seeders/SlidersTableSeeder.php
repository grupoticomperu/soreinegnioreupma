<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'title1' => 'GRUAS DE ARRASTRE PESADA',
            'title2' => 'para',
            'title3' => 'Mineras',
            'title4' => 'Desde S/ 400',
            'url' => '#',
            'image' => 'sliders/wYY9IW15JjLw1CY3BSdhILALawV0Gv4pqtPzyNJs.jpg',
            'state' => 1,
            'user_id'=> 1
        ]);

        Slider::create([
            'title1' => 'GRUAS DE ARRASTRE SUPER PESADA',
            'title2' => 'para',
            'title3' => 'Negocios',
            'title4' => 'Desde S/ 800',
            'url' => '#',
            'image' => 'sliders/o56Cn14npgz73i3jDG7gOfXrPTqB8U8HdBIZDwax.jpg',
            'state' => 1,
            'user_id'=> 1
        ]);

        Slider::create([
            'title1' => 'GRUAS TIPO PLARTAFORMA',
            'title2' => 'para',
            'title3' => 'Negocios',
            'title4' => 'Desde S/ 800',
            'url' => '#',
            'image' => 'sliders/QFY1SJzhObS9pPP9atHZZtOMiUEcsVVKGAyJ9whn.jpg',
            'state' => 1,
            'user_id'=> 1
        ]);


    }
}
