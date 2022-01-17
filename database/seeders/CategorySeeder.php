<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
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
                'name' => 'Local',                
                'price' => '20',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Defence',
                'price' => '10',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Foreigner',
                'price' => '50',
                'created_by' => '1',
                'updated_by' => '1'
            ],
        ];

        foreach($datas as $data)
        {
            Category::create($data);
        }
    }
}
