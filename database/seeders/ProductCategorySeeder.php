<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
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
                'name' => 'All Stock Private Label Products', 
                'created_by' => '1',
                'updated_by' => '1'
            ],   
            [
                'name' => 'Best Sellers', 
                'created_by' => '1',
                'updated_by' => '1'
            ],         
            [
                'name' => 'Featured Stock Products', 
                'created_by' => '1',
                'updated_by' => '1'
            ],         
            [
                'name' => 'Pets', 
                'created_by' => '1',
                'updated_by' => '1'
            ],         
            [
                'name' => 'Sugar-Free', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
        ];

        foreach($datas as $data)
        {
            ProductCategory::create($data);
        }
    }
}
