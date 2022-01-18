<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostCategory;

class PostCategorySeeder extends Seeder
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
                'name' => 'Delivery & Dosage Technology',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Dropshipping Supplements',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'News',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Popular Nutraceutical Ingredients',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Supplement Business Ownership',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Supplement Manufacturing',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Supplement Marketing',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Supplement Packaging',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Supplement Trends',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Uncategorized',
                'created_by' => '1',
                'updated_by' => '1'
            ],
        ];

        foreach($datas as $data)
        {
            PostCategory::create($data);
        }
    }
}
