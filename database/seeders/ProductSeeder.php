<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductProductCategory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = array(
            array('id' => '1','name' => '3 In 1 Gummy – Vitamin C 250mg – Zinc 10mg – Echinacea Purpurea Extract Polyphenols 100mg – Natural Orange Flavor & Color – Non-GMO – Gluten & Gelatin-Free – Vegan','slug' => '3-in-1-gummy-vitamin-c-250mg-zinc-10mg-echinacea-purpurea-extract-polyphenols-100mg-natural-orange-flavor-color-non-gmo-gluten-gelatin-free-vegan','quantity' => '10000','trending' => '0','description' => '<pre>
          GS&rsquo;s SKU:	GSG001</pre>','product_type_id' => '1','created_by' => '1','updated_by' => '1','deleted_at' => NULL,'created_at' => '2022-02-11 11:51:06','updated_at' => '2022-02-11 11:51:06'),
            array('id' => '2','name' => '4 In 1 Stress Relief Gummy – L-Theanine – Magnesium Citrate – Chamomile – Lemon Balm – Organic Tapioca Base – Allergen Free – Gluten Free – Non-GMO – Vegan Friendly','slug' => '4-in-1-stress-relief-gummy-l-theanine-magnesium-citrate-chamomile-lemon-balm-organic-tapioca-base-allergen-free-gluten-free-non-gmo-vegan-friendly','quantity' => '10000','trending' => '1','description' => '<pre>
          GS&rsquo;s SKU:	GSG002</pre>','product_type_id' => '1','created_by' => '1','updated_by' => '1','deleted_at' => NULL,'created_at' => '2022-02-11 11:54:51','updated_at' => '2022-02-11 11:54:51'),
            array('id' => '3','name' => '5 In 1 Sugar Free Saffron 88.5mg** Gummy W/ D2, GABA, Passion Flower, St, John’s Wort – Natural Mixed Berry Flavor & Color – Non-GMO – Gluten Free – Vegan Friendly','slug' => '5-in-1-sugar-free-saffron-88-5mg-gummy-w-d2-gaba-passion-flower-st-john-s-wort-natural-mixed-berry-flavor-color-non-gmo-gluten-free-vegan-friendly','quantity' => '10000','trending' => '0','description' => '<pre>
          GS&rsquo;s SKU:	GSG003</pre>','product_type_id' => '1','created_by' => '1','updated_by' => '1','deleted_at' => NULL,'created_at' => '2022-02-11 11:56:18','updated_at' => '2022-02-11 11:56:18'),
            array('id' => '4','name' => '6 In 1 Winter Shield Sugar-Free Gummy – Vitamin C + D, Zinc, Elderberry, Echinacea, Propolis – Orange Flavor – Vegetarian Friendly – Non-GMO – Gluten-Free','slug' => '6-in-1-winter-shield-sugar-free-gummy-vitamin-c-d-zinc-elderberry-echinacea-propolis-orange-flavor-vegetarian-friendly-non-gmo-gluten-free','quantity' => '10000','trending' => '0','description' => '<pre>
          GS&rsquo;s SKU:	GSG004</pre>','product_type_id' => '1','created_by' => '1','updated_by' => '1','deleted_at' => NULL,'created_at' => '2022-02-11 11:58:01','updated_at' => '2022-02-11 11:58:01'),
            array('id' => '6','name' => '95% Turmeric + Ginger & Black Pepper Gummies – Natural Peach Flavor – Vegan-Friendly – Non-GMO','slug' => '95-turmeric-ginger-black-pepper-gummies-natural-peach-flavor-vegan-friendly-non-gmo-2','quantity' => '10000','trending' => '0','description' => '<p>GS&rsquo;s SKU: GSG005 Item Form: Gummy Vitamin Standard 60 Count Weight: 225.7 Grams Standard 60 Count Bottle Size: 250 CC (4.5&Prime; L X 8&Prime; Circ. x 2.5&Prime; Dia.) Label Size &ndash; 7.5&Prime;W x 2.75&Prime;H Ingredients: Turmeric Extract (Curcuma longa) (Rhizome) [Standardized for 95% Curcuminoids], Ginger Root Extract (Zingiber officinale) (Root) [Standardized For 5% Gingerols], Black Pepper Extract (Piper Nigrum) (Fruit) [Standardized for 95% Piperine, Glucose Syrup, Sugar, Water, Pectin, Citric Acid, Trisodium Citrate, Natural Peach Flavor The first and only private label turmeric gummy with standardized high potency extracts for Turmeric, Ginger, and Black Pepper. These delicious naturally peach-flavored and colored gummies come in an orange berry shape with a light sugar coating on the outside.</p>','product_type_id' => '1','created_by' => '1','updated_by' => '1','deleted_at' => NULL,'created_at' => '2022-02-11 12:00:05','updated_at' => '2022-02-11 12:00:05'),
            array('id' => '7','name' => 'Activated Charcoal Gummy from Organic Coconut Shells Tapioca Base – Natural Berry Flavor & Color Non-GMO – Gluten Free – Vegan Friendly','slug' => 'activated-charcoal-gummy-from-organic-coconut-shells-tapioca-base-natural-berry-flavor-color-non-gmo-gluten-free-vegan-friendly','quantity' => '10000','trending' => '1','description' => '<pre>
          GS&rsquo;s SKU:	GSG006</pre>','product_type_id' => '1','created_by' => '1','updated_by' => '1','deleted_at' => NULL,'created_at' => '2022-02-11 12:01:56','updated_at' => '2022-02-11 12:01:56')
          );

        // [
        //     [
        //         'name' => 'Grass Fed Beef Organ Complex',
        //         'quantity' => '1',
        //         'description' => 'Fish Oil Enteric Coating 1,000 mg Softgels Contains DHA + EPA Gluten-Free',
        //         'product_type_id' => 1,
        //         'created_by' => '1',
        //         'updated_by' => '1'
        //     ],
        //     [
        //         'name' => 'Beauty Multi Collagen',
        //         'quantity' => '2',
        //         'description' => 'Focus Formula Bacopa Extract, Phosphatidylserine, Veggie Capsules Non-GMO Gluten Free Bioperine® Absorption',
        //         'product_type_id' => 2,
        //         'created_by' => '1',
        //         'updated_by' => '1'
        //     ]
        // ];

        foreach($datas as $data)
        {
            Product::create($data);
        }



        $product_images = array(
            array('id' => '1','product_id' => '1','is_cover_image' => '1','image' => '/upload/product/coverimage/2022021111510661692.png','image_sm' => '/upload/product/coverimage/2022021111510628199_md800x800.png','image_md' => '/upload/product/coverimage/2022021111510663372_sm=660x520.png','created_by' => '1','updated_by' => '1','created_at' => '2022-02-11 11:51:15','updated_at' => '2022-02-11 11:51:15'),
            array('id' => '2','product_id' => '1','is_cover_image' => '0','image' => '/upload/product/image/2022021111511534491.jpg','image_sm' => '/upload/product/image/2022021111511595881_md800x800.jpg','image_md' => '/upload/product/image/2022021111511534646_sm=660x520.jpg','created_by' => '1','updated_by' => '1','created_at' => '2022-02-11 11:51:17','updated_at' => '2022-02-11 11:51:17'),
            array('id' => '3','product_id' => '2','is_cover_image' => '1','image' => '/upload/product/coverimage/2022021111545191434.png','image_sm' => '/upload/product/coverimage/2022021111545154203_md800x800.png','image_md' => '/upload/product/coverimage/2022021111545152507_sm=660x520.png','created_by' => '1','updated_by' => '1','created_at' => '2022-02-11 11:55:00','updated_at' => '2022-02-11 11:55:00'),
            array('id' => '4','product_id' => '2','is_cover_image' => '0','image' => '/upload/product/image/2022021111550052728.jpg','image_sm' => '/upload/product/image/2022021111550055254_md800x800.jpg','image_md' => '/upload/product/image/2022021111550031529_sm=660x520.jpg','created_by' => '1','updated_by' => '1','created_at' => '2022-02-11 11:55:01','updated_at' => '2022-02-11 11:55:01'),
            array('id' => '5','product_id' => '3','is_cover_image' => '1','image' => '/upload/product/coverimage/2022021111561859186.png','image_sm' => '/upload/product/coverimage/2022021111561820936_md800x800.png','image_md' => '/upload/product/coverimage/2022021111561814790_sm=660x520.png','created_by' => '1','updated_by' => '1','created_at' => '2022-02-11 11:56:31','updated_at' => '2022-02-11 11:56:31'),
            array('id' => '6','product_id' => '3','is_cover_image' => '0','image' => '/upload/product/image/2022021111563146512.jpg','image_sm' => '/upload/product/image/2022021111563138774_md800x800.jpg','image_md' => '/upload/product/image/2022021111563160548_sm=660x520.jpg','created_by' => '1','updated_by' => '1','created_at' => '2022-02-11 11:56:32','updated_at' => '2022-02-11 11:56:32'),
            array('id' => '7','product_id' => '4','is_cover_image' => '1','image' => '/upload/product/coverimage/2022021111580187202.png','image_sm' => '/upload/product/coverimage/2022021111580156710_md800x800.png','image_md' => '/upload/product/coverimage/2022021111580126745_sm=660x520.png','created_by' => '1','updated_by' => '1','created_at' => '2022-02-11 11:58:11','updated_at' => '2022-02-11 11:58:11'),
            array('id' => '8','product_id' => '4','is_cover_image' => '0','image' => '/upload/product/image/2022021111581181048.jpg','image_sm' => '/upload/product/image/2022021111581137630_md800x800.jpg','image_md' => '/upload/product/image/2022021111581147497_sm=660x520.jpg','created_by' => '1','updated_by' => '1','created_at' => '2022-02-11 11:58:11','updated_at' => '2022-02-11 11:58:11'),
            array('id' => '9','product_id' => '6','is_cover_image' => '1','image' => '/upload/product/coverimage/2022021112000562004.png','image_sm' => '/upload/product/coverimage/2022021112000535179_md800x800.png','image_md' => '/upload/product/coverimage/2022021112000532631_sm=660x520.png','created_by' => '1','updated_by' => '1','created_at' => '2022-02-11 12:00:14','updated_at' => '2022-02-11 12:00:14'),
            array('id' => '10','product_id' => '6','is_cover_image' => '0','image' => '/upload/product/image/2022021112001436950.jpg','image_sm' => '/upload/product/image/2022021112001422548_md800x800.jpg','image_md' => '/upload/product/image/2022021112001453631_sm=660x520.jpg','created_by' => '1','updated_by' => '1','created_at' => '2022-02-11 12:00:15','updated_at' => '2022-02-11 12:00:15'),
            array('id' => '11','product_id' => '7','is_cover_image' => '1','image' => '/upload/product/coverimage/2022021112015625387.png','image_sm' => '/upload/product/coverimage/2022021112015617387_md800x800.png','image_md' => '/upload/product/coverimage/2022021112015630483_sm=660x520.png','created_by' => '1','updated_by' => '1','created_at' => '2022-02-11 12:02:05','updated_at' => '2022-02-11 12:02:05'),
            array('id' => '12','product_id' => '7','is_cover_image' => '0','image' => '/upload/product/image/2022021112020577708.png','image_sm' => '/upload/product/image/2022021112020552907_md800x800.png','image_md' => '/upload/product/image/2022021112020514035_sm=660x520.png','created_by' => '1','updated_by' => '1','created_at' => '2022-02-11 12:02:07','updated_at' => '2022-02-11 12:02:07')
          );
          foreach($product_images as $data)
        {
            ProductImage::create($data);
        }
        $product_product_category = array(
            array('id' => '1','product_id' => '1','product_categorie_id' => '1','created_at' => '2022-02-11 11:51:06','updated_at' => '2022-02-11 11:51:06'),
            array('id' => '2','product_id' => '1','product_categorie_id' => '9','created_at' => '2022-02-11 11:51:06','updated_at' => '2022-02-11 11:51:06'),
            array('id' => '3','product_id' => '1','product_categorie_id' => '15','created_at' => '2022-02-11 11:51:06','updated_at' => '2022-02-11 11:51:06'),
            array('id' => '4','product_id' => '1','product_categorie_id' => '22','created_at' => '2022-02-11 11:51:06','updated_at' => '2022-02-11 11:51:06'),
            array('id' => '5','product_id' => '2','product_categorie_id' => '4','created_at' => '2022-02-11 11:54:51','updated_at' => '2022-02-11 11:54:51'),
            array('id' => '6','product_id' => '2','product_categorie_id' => '9','created_at' => '2022-02-11 11:54:51','updated_at' => '2022-02-11 11:54:51'),
            array('id' => '7','product_id' => '2','product_categorie_id' => '15','created_at' => '2022-02-11 11:54:51','updated_at' => '2022-02-11 11:54:51'),
            array('id' => '8','product_id' => '2','product_categorie_id' => '22','created_at' => '2022-02-11 11:54:51','updated_at' => '2022-02-11 11:54:51'),
            array('id' => '9','product_id' => '3','product_categorie_id' => '4','created_at' => '2022-02-11 11:56:18','updated_at' => '2022-02-11 11:56:18'),
            array('id' => '10','product_id' => '3','product_categorie_id' => '9','created_at' => '2022-02-11 11:56:18','updated_at' => '2022-02-11 11:56:18'),
            array('id' => '11','product_id' => '3','product_categorie_id' => '15','created_at' => '2022-02-11 11:56:18','updated_at' => '2022-02-11 11:56:18'),
            array('id' => '12','product_id' => '3','product_categorie_id' => '22','created_at' => '2022-02-11 11:56:18','updated_at' => '2022-02-11 11:56:18'),
            array('id' => '13','product_id' => '4','product_categorie_id' => '5','created_at' => '2022-02-11 11:58:01','updated_at' => '2022-02-11 11:58:01'),
            array('id' => '14','product_id' => '4','product_categorie_id' => '6','created_at' => '2022-02-11 11:58:01','updated_at' => '2022-02-11 11:58:01'),
            array('id' => '15','product_id' => '4','product_categorie_id' => '9','created_at' => '2022-02-11 11:58:01','updated_at' => '2022-02-11 11:58:01'),
            array('id' => '16','product_id' => '4','product_categorie_id' => '15','created_at' => '2022-02-11 11:58:01','updated_at' => '2022-02-11 11:58:01'),
            array('id' => '17','product_id' => '4','product_categorie_id' => '20','created_at' => '2022-02-11 11:58:01','updated_at' => '2022-02-11 11:58:01'),
            array('id' => '18','product_id' => '4','product_categorie_id' => '22','created_at' => '2022-02-11 11:58:01','updated_at' => '2022-02-11 11:58:01'),
            array('id' => '24','product_id' => '6','product_categorie_id' => '9','created_at' => '2022-02-11 12:00:05','updated_at' => '2022-02-11 12:00:05'),
            array('id' => '25','product_id' => '6','product_categorie_id' => '11','created_at' => '2022-02-11 12:00:05','updated_at' => '2022-02-11 12:00:05'),
            array('id' => '26','product_id' => '6','product_categorie_id' => '12','created_at' => '2022-02-11 12:00:05','updated_at' => '2022-02-11 12:00:05'),
            array('id' => '27','product_id' => '6','product_categorie_id' => '16','created_at' => '2022-02-11 12:00:05','updated_at' => '2022-02-11 12:00:05'),
            array('id' => '28','product_id' => '6','product_categorie_id' => '17','created_at' => '2022-02-11 12:00:05','updated_at' => '2022-02-11 12:00:05'),
            array('id' => '29','product_id' => '7','product_categorie_id' => '9','created_at' => '2022-02-11 12:01:56','updated_at' => '2022-02-11 12:01:56'),
            array('id' => '30','product_id' => '7','product_categorie_id' => '15','created_at' => '2022-02-11 12:01:56','updated_at' => '2022-02-11 12:01:56'),
            array('id' => '31','product_id' => '7','product_categorie_id' => '22','created_at' => '2022-02-11 12:01:56','updated_at' => '2022-02-11 12:01:56')
          );

          foreach($product_product_category as $data)
          {
            ProductProductCategory::create($data);
          }
    }
}
