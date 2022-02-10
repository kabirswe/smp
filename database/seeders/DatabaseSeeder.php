<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductTypeSeeder::class);
        // $this->call(ProductSeeder::class);
        $this->call(ProductImageSeeder::class);
        $this->call(PostCategorySeeder::class);
        $this->call(PostSeeder::class);
        // $this->call(PostCommentSeeder::class);
    }
}
