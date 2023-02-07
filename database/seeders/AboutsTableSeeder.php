<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Nosotros',
                'our' => '<p>Somos una empresa reconocida a nivel nacional, con m&aacute;s de 15 a&ntilde;os de experiencia, que se especializa en el dise&ntilde;o, fabricaci&oacute;n y mantenimiento de gr&uacute;as para auxilio automotriz, carrocer&iacute;as de metal y componentes de hidr&aacute;ulica m&oacute;vil.</p>

<p>Tambi&eacute;n nos hacemos cargo del dise&ntilde;o, suministro e instalaci&oacute;n de accesorios de hidr&aacute;ulica (como bombas, tomafuerzas, cilindros hidr&aacute;ulicos, winches, v&aacute;lvulas de distribuci&oacute;n, etc), as&iacute; como el montaje, instalaci&oacute;n y mantenimiento de gr&uacute;as articuladas.</p>',
                'mission' => '<p>Sobrepasar las expectativas de nuestros clientes al ofrecer los mejores productos y los mejores servicios, en el rubro de la metalmec&aacute;nica, junto al respaldo de nuestro, altamente especializado, equipo t&eacute;cnico y nuestra consolidada experiencia.</p>',
                'vission' => '<p>Consolidar el liderazgo de Ampuero Ingenieros a nivel nacional mediante la calidad de sus productos y servicios y, de esta manera, generar confianza y satisfacci&oacute;n en todos sus clientes.</p>',
                'imagenbaner' => 'about/x0udg4iuzF8Mk6YpmGKstv8lHWP19wICBPv5EPwu.jpg',
                'imagen1' => 'about/DrILk3VztrFiIENI9tz1MPWq72KPnysi7fpljaUb.jpg',
                'imagen2' => 'about/CrucpfiSnsH015Orn9cs5INwC6ztdM8DTO50h3Tv.jpg',
                'imagen3' => NULL,
                'description' => 'Ampuero ingenieros',
                'keywords' => 'fabricación de grúas hidráulicas',
                'user_id' => 1,
                'created_at' => '2023-01-31 21:18:52',
                'updated_at' => '2023-02-02 23:35:44',
            ),
        ));
        
        
    }
}