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
                'name' => 'Cognitive', 
                'created_by' => '1',
                'updated_by' => '1'
            ],         
            [
                'name' => 'Elderberry', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Essential Vitamins', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Exclusives', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Fish Oil', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Gummy Vitamins', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Hair Skin & Nails', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Herbal', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Joint Health', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Keto', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Kids', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'New Products', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Non-GMO Verified', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Pets', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Sample Ready Products', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Softgels', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Sports Nutrition', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Sugar-Free', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Weight Management', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Wellness', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Packaging', 
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
            ProductCategory::create($data);
        }
    }
}
