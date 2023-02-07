<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'codigo' => NULL,
                'name' => 'GRÚA PESADA',
                'slug' => 'grua-pesada',
                'description' => '<p>descripcion de grua pesadadescripcion de grua pesadadescripcion de grua pesadadescripcion de grua pesada</p>',
                'video' => NULL,
                'purchaseprice' => NULL,
                'saleprice' => 100.0,
                'salepricemin' => NULL,
                'stock' => NULL,
                'stockmin' => NULL,
                'currency' => '1',
                'um_id' => NULL,
                'modelo_id' => NULL,
                'subcategory_id' => 1,
                'marca_id' => 1,
                'state' => 1,
                'titlegoogle' => NULL,
                'descriptiongoogle' => NULL,
                'keywordsgoogle' => NULL,
                'image1' => 'products/mWUzcIiVsA9JYQZlBMKLAFoKaiQ8LXfGyV4FTJky.jpg',
                'image2' => 'products/dTPcz1vnoB5Aw1VYtmWDtw1MarXbJDYHBZKCJhdd.jpg',
                'image3' => 'products/Ekeu0x4jkRoNldWrC8i05BXqctFpstljUtnVzoRq.jpg',
                'image4' => 'products/Pyw4bP9t2MTwURBTOurfhIrBaSOJAoGSvI9Yo7nT.jpg',
                'brochure' => NULL,
                'typeproduct' => '1',
                'created_at' => '2023-01-31 21:46:05',
                'updated_at' => '2023-02-02 23:25:55',
            ),
            1 => 
            array (
                'id' => 2,
                'codigo' => NULL,
                'name' => 'GRÚA LIVIANA',
                'slug' => 'grua-liviana',
                'description' => '<p>Descripción de grúa livianaDescripción de grúa livianaDescripción de grúa livianaDescripción de grúa liviana</p>',
                'video' => NULL,
                'purchaseprice' => NULL,
                'saleprice' => NULL,
                'salepricemin' => NULL,
                'stock' => NULL,
                'stockmin' => NULL,
                'currency' => '1',
                'um_id' => NULL,
                'modelo_id' => NULL,
                'subcategory_id' => 1,
                'marca_id' => 1,
                'state' => 1,
                'titlegoogle' => NULL,
                'descriptiongoogle' => NULL,
                'keywordsgoogle' => NULL,
                'image1' => 'products/WN3q2HNVnNtsZFzTpviyAAbfcRSigy3jVFyHYAOi.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'brochure' => NULL,
                'typeproduct' => '1',
                'created_at' => '2023-01-31 21:48:49',
                'updated_at' => '2023-01-31 21:48:49',
            ),
            2 => 
            array (
                'id' => 3,
                'codigo' => NULL,
                'name' => 'GRÚA DE ARRASTRE PESADA',
                'slug' => 'grua-de-arrastre-pesada',
                'description' => '<p>descripción de grua de arrastre pesada descripción de grua de arrastre pesadadescripción de grua de arrastre pesada</p>',
                'video' => NULL,
                'purchaseprice' => NULL,
                'saleprice' => NULL,
                'salepricemin' => NULL,
                'stock' => NULL,
                'stockmin' => NULL,
                'currency' => '1',
                'um_id' => NULL,
                'modelo_id' => NULL,
                'subcategory_id' => 1,
                'marca_id' => 1,
                'state' => 1,
                'titlegoogle' => NULL,
                'descriptiongoogle' => NULL,
                'keywordsgoogle' => NULL,
                'image1' => 'products/FolSAgTzisLBfXeAOaLEOCQs802ZF76AfUA2l49C.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'brochure' => NULL,
                'typeproduct' => '1',
                'created_at' => '2023-01-31 21:51:51',
                'updated_at' => '2023-01-31 21:51:51',
            ),
            3 => 
            array (
                'id' => 4,
                'codigo' => NULL,
                'name' => 'GRUA DE ARRASTRE SUPER PESADA',
                'slug' => 'grua-de-arrastre-super-pesada',
                'description' => '<p>descripcion de agruas de arrastre super pesada &nbsp;descripcion de agruas de arrastre super pesada descripcion de agruas de arrastre super pesada&nbsp;</p>',
                'video' => NULL,
                'purchaseprice' => NULL,
                'saleprice' => NULL,
                'salepricemin' => NULL,
                'stock' => NULL,
                'stockmin' => NULL,
                'currency' => '1',
                'um_id' => NULL,
                'modelo_id' => NULL,
                'subcategory_id' => 1,
                'marca_id' => 1,
                'state' => 1,
                'titlegoogle' => NULL,
                'descriptiongoogle' => NULL,
                'keywordsgoogle' => NULL,
                'image1' => 'products/5DJ9OC21qKhGp5EI3ok4tv5eaAcA7rVkZQ2ifkxb.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'brochure' => NULL,
                'typeproduct' => '1',
                'created_at' => '2023-01-31 21:54:08',
                'updated_at' => '2023-01-31 21:54:08',
            ),
        ));
        
        
    }
}