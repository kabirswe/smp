<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'product_id' => 1,
                'image' => 'False',
                'created_by' => '1',
                'updated_by' => '1'
            ],
        ];

        foreach($datas as $data)
        {
            ProductImage::create($data);
        }
    }
}