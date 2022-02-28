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
                'name' => 'All Stock Private Label Supplements', 
                'slug' => 'all-stock-private-label-supplements', 
                'created_by' => '1',
                'updated_by' => '1'
            ],   
            [
                'name' => 'Beauty', 
                'slug' => 'beauty', 
                'created_by' => '1',
                'updated_by' => '1'
            ],   
            [
                'name' => 'Best Sellers', 
                'slug' => 'best-sellers', 
                'created_by' => '1',
                'updated_by' => '1'
            ],         
            [
                'name' => 'Bone Broth', 
                'slug' => 'bone-broth', 
                'created_by' => '1',
                'updated_by' => '1'
            ],         
            [
                'name' => 'Cognitive',
                'slug' => 'cognitive',
                'created_by' => '1',
                'updated_by' => '1'
            ],         
            [
                'name' => 'Elderberry', 
                'slug' => 'elderberry', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Essential Vitamins', 
                'slug' => 'essential-vitamins', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Exclusives', 
                'slug' => 'exclusives', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Fish Oil', 
                'slug' => 'fish-oil', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Gummy Vitamins', 
                'slug' => 'gummy-vitamins', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Hair Skin & Nails', 
                'slug' => 'hair-skin-&-nails', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Herbal', 
                'slug' => 'herbal', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Joint Health', 
                'slug' => 'joint-health', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Keto', 
                'slug' => 'keto', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Kids', 
                'slug' => 'kids', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'New Products', 
                'slug' => 'new-products', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Non-GMO Verified', 
                'slug' => 'non-gmo-verified', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Sample Ready Products', 
                'slug' => 'sample-ready-products', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Softgels', 
                'slug' => 'softgels', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Sports Nutrition', 
                'slug' => 'sports-nutrition', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Sugar-Free', 
                'slug' => 'sugar-free', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Weight Management', 
                'slug' => 'weight-management', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Wellness', 
                'slug' => 'wellness', 
                'created_by' => '1',
                'updated_by' => '1'
            ],        
            [
                'name' => 'Packaging', 
                'slug' => 'packaging', 
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
            ProductCategory::create($data);
        }
    }
}
