<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title' => 'Valvulas Hidraulicas',
            'slug' => 'valvulas-hidraulicas',
            'imagen1' => 'public/service/servicio1.jpg',
            'imagen2' => 'public/service/servicio2.jpg',
            'imagen3' => 'public/service/servicio3.jpg',
            'shortdescription' => 'Valvulas HidraulicasValvulas HidraulicasValvulas HidraulicasValvulas HidraulicasValvulas Hidraulicas',
            'longdescription' => 'Valvulas HidraulicasValvulas HidraulicasValvulas HidraulicasValvulas HidraulicasValvulas HidraulicasValvulas HidraulicasValvulas HidraulicasValvulas Hidraulicas',
            'subcategoryservice_id' => 1,
            'user_id'=> 1
        ]);


        Service::create([
            'title' => 'Bombas Hidraulicas',
            'slug' => 'bombas-hidraulicas',
            'imagen1' => 'public/service/servicio1.jpg',
            'imagen2' => 'public/service/servicio2.jpg',
            'imagen3' => 'public/service/servicio3.jpg',
            'shortdescription' => 'Bombas HidraulicasBombas HidraulicasBombas HidraulicasBombas HidraulicasBombas HidraulicasBombas HidraulicasBombas HidraulicasBombas Hidraulicas',
            'longdescription' => 'Bombas HidraulicasBombas HidraulicasBombas HidraulicasBombas HidraulicasBombas HidraulicasBombas HidraulicasBombas HidraulicasBombas HidraulicasBombas HidraulicasBombas Hidraulicas',
            'subcategoryservice_id' => 2,
            'user_id'=> 1
        ]);



    }
}
