<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'teacher']);
        $role1 = Role::create(['name' => 'student']);
//        $role1->givePermissionTo('edit articles');
//        $role1->givePermissionTo('delete articles');

        $categories = [
            ["name" => "Ingliz tili"],
            ["name" => "Rus tili"],
            ["name" => "Matematika"],
            ["name" => "Biologiya"],
            ["name" => "Frontend"],
            ["name" => "Backend"],
            ["name" => "Android"],
            ["name" => "Fizika"]
        ];

        Category::insert($categories);

    }
}
