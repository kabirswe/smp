<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
// use App\Models\ProductImage;
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
            array('id' => '1','name' => '5 In 1 Sugar Free Saffron 88.5mg** Gummy W/ D2, GABA, Passion Flower, St, John’s Wort – Natural Mixed Berry Flavor & Color – Non-GMO – Gluten Free – Vegan Friendly(Product Availability May Vary)','slug' => 'Sugar-Free-Saffron','quantity' => NULL,'description' => '<p>5 In 1 Sugar Free Saffron 88.5mg** Gummy W/ D2, GABA, Passion Flower, St, John&rsquo;s Wort &ndash; Natural Mixed Berry Flavor &amp; Color &ndash; Non-GMO &ndash; Gluten Free &ndash; Vegan Friendly(Product Availability May Vary)</p>','product_type_id' => '2','created_by' => '1','updated_by' => '1','deleted_at' => NULL,'created_at' => '2022-01-29 06:56:07','updated_at' => '2022-01-29 06:56:07'),
            array('id' => '2','name' => '6 In 1 Winter Shield Sugar-Free Gummy – Vitamin C + D, Zinc, Elderberry, Echinacea, Propolis – Orange Flavor – Vegetarian Friendly – Non-GMO – Gluten-Free','slug' => 'Winter-Shield-Sugar-Free','quantity' => NULL,'description' => '<p>6 In 1 Winter Shield Sugar-Free Gummy &ndash; Vitamin C + D, Zinc, Elderberry, Echinacea, Propolis &ndash; Orange Flavor &ndash; Vegetarian Friendly &ndash; Non-GMO &ndash; Gluten-Free</p>','product_type_id' => '1','created_by' => '1','updated_by' => '1','deleted_at' => NULL,'created_at' => '2022-01-29 06:57:54','updated_at' => '2022-01-29 06:57:54'),
            array('id' => '3','name' => '3 In 1 Gummy – Vitamin C 250mg – Zinc 10mg – Echinacea Purpurea Extract Polyphenols 100mg – Natural Orange Flavor & Color – Non-GMO – Gluten & Gelatin-Free – Vegan','slug' => 'Gummy–Vitamin-C','quantity' => NULL,'description' => '<p>3 In 1 Gummy &ndash; Vitamin C 250mg &ndash; Zinc 10mg &ndash; Echinacea Purpurea Extract Polyphenols 100mg &ndash; Natural Orange Flavor &amp; Color &ndash; Non-GMO &ndash; Gluten &amp; Gelatin-Free &ndash; Vegan</p>','product_type_id' => '1','created_by' => '1','updated_by' => '1','deleted_at' => NULL,'created_at' => '2022-01-29 07:00:59','updated_at' => '2022-01-29 07:00:59'),
            array('id' => '4','name' => '4 In 1 Stress Relief Gummy – L-Theanine – Magnesium Citrate – Chamomile – Lemon Balm – Organic Tapioca Base – Allergen Free – Gluten Free – Non-GMO – Vegan Friendly','slug' => 'Gummy–Vitamin-D','quantity' => NULL,'description' => '<p>4 In 1 Stress Relief Gummy &ndash; L-Theanine &ndash; Magnesium Citrate &ndash; Chamomile &ndash; Lemon Balm &ndash; Organic Tapioca Base &ndash; Allergen Free &ndash; Gluten Free &ndash; Non-GMO &ndash; Vegan Friendly</p>','product_type_id' => '2','created_by' => '1','updated_by' => '1','deleted_at' => NULL,'created_at' => '2022-01-29 07:02:51','updated_at' => '2022-01-29 07:02:51')
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



        // $product_images = array(
        //     array('id' => '2','product_id' => '2','is_cover_image' => '1','image' => '/upload/product/coverimage/2022012906490563167.png','image_sm' => '/upload/product/coverimage/2022012906490536128_md254x350.png','image_md' => '/upload/product/coverimage/2022012906490514833_sm=116x132.png','created_by' => '1','updated_by' => '1','created_at' => '2022-01-29 06:49:15','updated_at' => '2022-01-29 06:49:15'),
        //     array('id' => '3','product_id' => '3','is_cover_image' => '1','image' => '/upload/product/image/2022012906491566692.png','image_sm' => '/upload/product/image/2022012906491576139_md254x350.png','image_md' => '/upload/product/image/2022012906491520534_sm=116x132.png','created_by' => '1','updated_by' => '1','created_at' => '2022-01-29 06:49:25','updated_at' => '2022-01-29 06:49:25'),
        //     array('id' => '4','product_id' => '4','is_cover_image' => '1','image' => '/upload/product/coverimage/2022012906532296982.png','image_sm' => '/upload/product/coverimage/2022012906532298444_md254x350.png','image_md' => '/upload/product/coverimage/2022012906532232132_sm=116x132.png','created_by' => '1','updated_by' => '1','created_at' => '2022-01-29 06:53:31','updated_at' => '2022-01-29 06:53:31'),
        //     array('id' => '5','product_id' => '4','is_cover_image' => '0','image' => '/upload/product/image/2022012906533191134.png','image_sm' => '/upload/product/image/2022012906533162638_md254x350.png','image_md' => '/upload/product/image/2022012906533162295_sm=116x132.png','created_by' => '1','updated_by' => '1','created_at' => '2022-01-29 06:53:41','updated_at' => '2022-01-29 06:53:41'),
        //     array('id' => '6','product_id' => '2','is_cover_image' => '0','image' => '/upload/product/coverimage/2022012906560761521.png','image_sm' => '/upload/product/coverimage/2022012906560725486_md254x350.png','image_md' => '/upload/product/coverimage/2022012906560778387_sm=116x132.png','created_by' => '1','updated_by' => '1','created_at' => '2022-01-29 06:56:18','updated_at' => '2022-01-29 06:56:18'),
        //     array('id' => '7','product_id' => '3','is_cover_image' => '0','image' => '/upload/product/image/2022012906561859824.png','image_sm' => '/upload/product/image/2022012906561854957_md254x350.png','image_md' => '/upload/product/image/2022012906561849088_sm=116x132.png','created_by' => '1','updated_by' => '1','created_at' => '2022-01-29 06:56:28','updated_at' => '2022-01-29 06:56:28'),
        //     array('id' => '8','product_id' => '1','is_cover_image' => '1','image' => '/upload/product/coverimage/2022012906575429712.png','image_sm' => '/upload/product/coverimage/2022012906575485653_md254x350.png','image_md' => '/upload/product/coverimage/2022012906575427324_sm=116x132.png','created_by' => '1','updated_by' => '1','created_at' => '2022-01-29 06:58:05','updated_at' => '2022-01-29 06:58:05'),
        //     array('id' => '9','product_id' => '1','is_cover_image' => '0','image' => '/upload/product/image/2022012906580568875.png','image_sm' => '/upload/product/image/2022012906580540609_md254x350.png','image_md' => '/upload/product/image/2022012906580575433_sm=116x132.png','created_by' => '1','updated_by' => '1','created_at' => '2022-01-29 06:58:15','updated_at' => '2022-01-29 06:58:15'),
        //     array('id' => '10','product_id' => '4','is_cover_image' => '0','image' => '/upload/product/coverimage/2022012907005924404.png','image_sm' => '/upload/product/coverimage/2022012907005939564_md254x350.png','image_md' => '/upload/product/coverimage/2022012907005991057_sm=116x132.png','created_by' => '1','updated_by' => '1','created_at' => '2022-01-29 07:01:09','updated_at' => '2022-01-29 07:01:09'),
        //     array('id' => '11','product_id' => '4','is_cover_image' => '0','image' => '/upload/product/image/2022012907010938640.png','image_sm' => '/upload/product/image/2022012907010985394_md254x350.png','image_md' => '/upload/product/image/2022012907010916348_sm=116x132.png','created_by' => '1','updated_by' => '1','created_at' => '2022-01-29 07:01:19','updated_at' => '2022-01-29 07:01:19'),
        //     array('id' => '12','product_id' => '3','is_cover_image' => '0','image' => '/upload/product/coverimage/2022012907025220007.png','image_sm' => '/upload/product/coverimage/2022012907025297856_md254x350.png','image_md' => '/upload/product/coverimage/2022012907025219546_sm=116x132.png','created_by' => '1','updated_by' => '1','created_at' => '2022-01-29 07:03:01','updated_at' => '2022-01-29 07:03:01'),
        //     array('id' => '13','product_id' => '3','is_cover_image' => '0','image' => '/upload/product/image/2022012907030247217.png','image_sm' => '/upload/product/image/2022012907030265094_md254x350.png','image_md' => '/upload/product/image/2022012907030253068_sm=116x132.png','created_by' => '1','updated_by' => '1','created_at' => '2022-01-29 07:03:11','updated_at' => '2022-01-29 07:03:11')
        //   );
        //   foreach($product_images as $data)
        // {
        //     ProductImage::create($data);
        // }
        $product_product_category = array(
            array('id' => '1','product_id' => '3','product_categorie_id' => '1','created_at' => '2022-01-29 06:49:05','updated_at' => '2022-01-29 06:49:05'),
            array('id' => '2','product_id' => '3','product_categorie_id' => '2','created_at' => '2022-01-29 06:49:05','updated_at' => '2022-01-29 06:49:05'),
            array('id' => '3','product_id' => '3','product_categorie_id' => '5','created_at' => '2022-01-29 06:49:05','updated_at' => '2022-01-29 06:49:05'),
            array('id' => '4','product_id' => '3','product_categorie_id' => '6','created_at' => '2022-01-29 06:49:05','updated_at' => '2022-01-29 06:49:05'),
            array('id' => '5','product_id' => '3','product_categorie_id' => '8','created_at' => '2022-01-29 06:49:05','updated_at' => '2022-01-29 06:49:05'),
            array('id' => '6','product_id' => '3','product_categorie_id' => '11','created_at' => '2022-01-29 06:49:05','updated_at' => '2022-01-29 06:49:05'),
            array('id' => '7','product_id' => '3','product_categorie_id' => '12','created_at' => '2022-01-29 06:49:05','updated_at' => '2022-01-29 06:49:05'),
            array('id' => '8','product_id' => '3','product_categorie_id' => '13','created_at' => '2022-01-29 06:49:05','updated_at' => '2022-01-29 06:49:05'),
            array('id' => '9','product_id' => '3','product_categorie_id' => '14','created_at' => '2022-01-29 06:49:05','updated_at' => '2022-01-29 06:49:05'),
            array('id' => '10','product_id' => '4','product_categorie_id' => '1','created_at' => '2022-01-29 06:53:21','updated_at' => '2022-01-29 06:53:21'),
            array('id' => '11','product_id' => '4','product_categorie_id' => '2','created_at' => '2022-01-29 06:53:21','updated_at' => '2022-01-29 06:53:21'),
            array('id' => '12','product_id' => '4','product_categorie_id' => '3','created_at' => '2022-01-29 06:53:21','updated_at' => '2022-01-29 06:53:21'),
            array('id' => '13','product_id' => '4','product_categorie_id' => '4','created_at' => '2022-01-29 06:53:21','updated_at' => '2022-01-29 06:53:21'),
            array('id' => '14','product_id' => '4','product_categorie_id' => '5','created_at' => '2022-01-29 06:53:21','updated_at' => '2022-01-29 06:53:21'),
            array('id' => '15','product_id' => '4','product_categorie_id' => '8','created_at' => '2022-01-29 06:53:21','updated_at' => '2022-01-29 06:53:21'),
            array('id' => '16','product_id' => '4','product_categorie_id' => '9','created_at' => '2022-01-29 06:53:21','updated_at' => '2022-01-29 06:53:21'),
            array('id' => '17','product_id' => '4','product_categorie_id' => '10','created_at' => '2022-01-29 06:53:22','updated_at' => '2022-01-29 06:53:22'),
            array('id' => '18','product_id' => '4','product_categorie_id' => '11','created_at' => '2022-01-29 06:53:22','updated_at' => '2022-01-29 06:53:22'),
            array('id' => '19','product_id' => '1','product_categorie_id' => '1','created_at' => '2022-01-29 06:56:07','updated_at' => '2022-01-29 06:56:07'),
            array('id' => '20','product_id' => '1','product_categorie_id' => '2','created_at' => '2022-01-29 06:56:07','updated_at' => '2022-01-29 06:56:07'),
            array('id' => '21','product_id' => '1','product_categorie_id' => '7','created_at' => '2022-01-29 06:56:07','updated_at' => '2022-01-29 06:56:07'),
            array('id' => '22','product_id' => '1','product_categorie_id' => '9','created_at' => '2022-01-29 06:56:07','updated_at' => '2022-01-29 06:56:07'),
            array('id' => '23','product_id' => '1','product_categorie_id' => '12','created_at' => '2022-01-29 06:56:07','updated_at' => '2022-01-29 06:56:07'),
            array('id' => '24','product_id' => '1','product_categorie_id' => '13','created_at' => '2022-01-29 06:56:07','updated_at' => '2022-01-29 06:56:07'),
            array('id' => '25','product_id' => '1','product_categorie_id' => '15','created_at' => '2022-01-29 06:56:07','updated_at' => '2022-01-29 06:56:07'),
            array('id' => '26','product_id' => '1','product_categorie_id' => '19','created_at' => '2022-01-29 06:56:07','updated_at' => '2022-01-29 06:56:07'),
            array('id' => '27','product_id' => '2','product_categorie_id' => '1','created_at' => '2022-01-29 06:57:54','updated_at' => '2022-01-29 06:57:54'),
            array('id' => '28','product_id' => '2','product_categorie_id' => '2','created_at' => '2022-01-29 06:57:54','updated_at' => '2022-01-29 06:57:54'),
            array('id' => '29','product_id' => '2','product_categorie_id' => '3','created_at' => '2022-01-29 06:57:54','updated_at' => '2022-01-29 06:57:54'),
            array('id' => '30','product_id' => '2','product_categorie_id' => '5','created_at' => '2022-01-29 06:57:54','updated_at' => '2022-01-29 06:57:54'),
            array('id' => '31','product_id' => '2','product_categorie_id' => '6','created_at' => '2022-01-29 06:57:54','updated_at' => '2022-01-29 06:57:54'),
            array('id' => '32','product_id' => '2','product_categorie_id' => '7','created_at' => '2022-01-29 06:57:54','updated_at' => '2022-01-29 06:57:54'),
            array('id' => '33','product_id' => '2','product_categorie_id' => '9','created_at' => '2022-01-29 06:57:54','updated_at' => '2022-01-29 06:57:54'),
            array('id' => '34','product_id' => '2','product_categorie_id' => '11','created_at' => '2022-01-29 06:57:54','updated_at' => '2022-01-29 06:57:54'),
            array('id' => '35','product_id' => '2','product_categorie_id' => '13','created_at' => '2022-01-29 06:57:54','updated_at' => '2022-01-29 06:57:54'),
            array('id' => '36','product_id' => '2','product_categorie_id' => '14','created_at' => '2022-01-29 06:57:54','updated_at' => '2022-01-29 06:57:54'),
            array('id' => '37','product_id' => '2','product_categorie_id' => '19','created_at' => '2022-01-29 06:57:54','updated_at' => '2022-01-29 06:57:54'),
            array('id' => '38','product_id' => '2','product_categorie_id' => '21','created_at' => '2022-01-29 06:57:54','updated_at' => '2022-01-29 06:57:54'),
        );

          foreach($product_product_category as $data)
          {
            ProductProductCategory::create($data);
          }
    }
}
