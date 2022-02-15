<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123456'),
            'created_by' => '1',
            'updated_by' => '1'
        ]);

        $role = Role::create(['name' => 'admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        // $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

        $user2 = User::create([
            'name' => 'gummy admin',
            'email' => 'admin@gummyspecialists.com',
            'password' => bcrypt('1234@abcd'),
            'created_by' => '1',
            'updated_by' => '1'
        ]);

        $user2->assignRole([$role->id]);

        $otherRoles = [
            [
                'name' => 'operator'
            ]
        ];
        foreach($otherRoles as $role)
        {
            Role::create($role);
        }

        $otherUsers = [
            [
                'name' => 'operator',
                'email' => 'operator@mail.com',
                'password' => bcrypt('123456'),
                'created_by' => '1',
                'updated_by' => '1'
            ]
        ];

        foreach($otherUsers as $user)
        {
            $newUser = User::create($user);
            $newUser->assignRole(2);
        }

        // *********** Roles with permission ************//
        //admin
        $adminRole = Role::findByName('admin');
        $adminRole->givePermissionTo([
            'role',
            'activity-log',
            'account-unblock',
            'all-account-list',
            'all-account-edit',
            'all-account-delete',
            'product-category',
            'product-type',
            'product',
            'order',
            'rating',
            'post-category',
            'post',
            'post-comment',
        ]);
        //operator
        $operatorRole = Role::findByName('operator');
        $operatorRole->givePermissionTo([
            'product',
            'order',
            'rating',
            'post',
            'post-comment',
        ]);
    }
}
