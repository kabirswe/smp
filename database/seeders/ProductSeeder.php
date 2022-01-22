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
                'product_type_id' => 1,
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Beauty Multi Collagen',
                'quantity' => '2',
                'description' => 'Focus Formula Bacopa Extract, Phosphatidylserine, Veggie Capsules Non-GMO Gluten Free Bioperine® Absorption',
                'product_type_id' => 2,
                'created_by' => '1',
                'updated_by' => '1'
            ]
        ];

        foreach($datas as $data)
        {
            Product::create($data);
        }
    }
}
