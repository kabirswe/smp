<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
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
                'name' => 'Grass Fed Beef Organ Complex',                
                'quantity' => '1',
                'description' => 'Fish Oil Enteric Coating 1,000 mg Softgels Contains DHA + EPA Gluten-Free',
                'label' => 'Wellness',
                'category' => 'Protein',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Beauty Multi Collagen',                
                'quantity' => '2',
                'description' => 'Focus Formula Bacopa Extract, Phosphatidylserine, Veggie Capsules Non-GMO Gluten Free Bioperine® Absorption',
                'label' => 'Fish Oil',
                'category' => 'Liquids',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Grass Fed Beef Organ Complex',                
                'quantity' => '3',
                'description' => 'Chondroitin, Organic Turmeric & More Veggie Capsules  Gluten Free Bioperine & Organic Nu-Flow',
                'label' => 'Wellness',
                'category' => 'Protein',
                'created_by' => '1',
                'updated_by' => '1'
            ],           
        ];

        foreach($datas as $data)
        {
            Product::create($data);
        }
    }
}
