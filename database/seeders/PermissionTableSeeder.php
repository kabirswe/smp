<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * module manes are user, role, account-authority, activity-log, all-account-list, operator, buyer, seller, island, category, product, inquery, contact
     * @return void
     */
    public function run()
    {
        $permissions = [
           ['name' => 'role', 'display_name' => 'Role'],
           ['name' => 'activity-log', 'display_name' => 'Activity logs'],
           ['name' => 'account-unblock', 'display_name' => 'Account Unblock'],
           ['name' => 'all-account-list', 'display_name' => 'All account'],
           ['name' => 'all-account-edit', 'display_name' => 'All account edit'],
           ['name' => 'all-account-delete', 'display_name' => 'All account delete'],
           ['name' => 'product-category', 'display_name' => 'Product category'],
           ['name' => 'product-type', 'display_name' => 'Product type'],
           ['name' => 'product', 'display_name' => 'Product'],
           ['name' => 'post-category', 'display_name' => 'Post category'],
           ['name' => 'post', 'display_name' => 'Post'],
           ['name' => 'post-comment', 'display_name' => 'Post comment'],
           ['name' => 'order', 'display_name' => 'Order'],
           ['name' => 'rating', 'display_name' => 'Rating'],
        ];

        foreach ($permissions as $permission) {
             Permission::create($permission);
        }
    }
}
