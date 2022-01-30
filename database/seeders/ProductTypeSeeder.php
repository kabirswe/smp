<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductType;

class ProductTypeSeeder extends Seeder
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
                'name' => 'Gummy',
                'slug' => 'gummy',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Softgel', 
                'slug' => 'softgel', 
                'created_by' => '1',
                'updated_by' => '1'
            ],           
        ];

        foreach($datas as $data)
        {
            ProductType::create($data);
        }
    }
}
