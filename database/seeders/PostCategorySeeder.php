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
                'slug' => 'delivery-&-dosage-technology',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Dropshipping Supplements',
                'slug' => 'dropshipping-supplements',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'News',
                'slug' => 'news',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Popular Nutraceutical Ingredients',
                'slug' => 'popular-nutraceutical-ingredients',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Supplement Business Ownership',
                'slug' => 'supplement-business-ownership',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Supplement Manufacturing',
                'slug' => 'supplement-manufacturing',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Supplement Marketing',
                'slug' => 'supplement-marketing',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Supplement Packaging',
                'slug' => 'supplement-packaging',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Supplement Trends',
                'slug' => 'supplement-trends',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Uncategorized',
                'slug' => 'uncategorized',
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
