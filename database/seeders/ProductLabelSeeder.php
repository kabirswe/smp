<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductLabel;

class ProductLabelSeeder extends Seeder
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
                'name' => 'All Stock Private Label Supplements', 
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Beauty', 
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Best Sellers', 
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Bone Broth', 
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Capsules', 
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Cognitive', 
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Collagen', 
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Elderberry', 
                'created_by' => '1',
                'updated_by' => '1'
            ],
        ];

        foreach($datas as $data)
        {
            ProductLabel::create($data);
        }
    }
}
