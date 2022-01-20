<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
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
                'title' => 'SMP Nutra Donates 1,000 Vitamin D3 Bottles for COVID Relief!',                
                'category' => 'Delivery & Dosage Technology',
                'image' => 'image',
                'description' => 'BioPerine is a patented extract from black pepper, which is a very familiar spice found in nearly every',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'title' => 'How to Get Started Dropshipping Bodybuilding Supplements',                
                'category' => 'Dropshipping Supplements',
                'image' => 'Image',
                'description' => 'Are you planning to start a dropshipping supplement business? Well, it would be a great idea to start…',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'title' => 'New Nutrition Labels Best Practices & Rules in 2020',                
                'category' => 'Supplement Packaging',
                'image' => 'Image',
                'description' => 'More than ever, there is the importance of keeping the ingredients of your products',
                'created_by' => '1',
                'updated_by' => '1'
            ],            
        ];

        foreach($datas as $data)
        {
            Post::create($data);
        }
    }
}
