<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
         \App\Models\User::factory(100)->create();

         DB::table('roles')->insert([
             ['name' => 'Admin'],
             ['name' => 'Content Manager'],
             ['name' => 'User'],
         ]);

        DB::table('permissions')->insert([
            ['name' => 'View Admin Dashboard'],
            ['name' => 'Administer Users'],
        ]);

        DB::table('role_has_permissions')->insert([
            'role_id' => 2,
            'permission_id' => 1
        ]);

        DB::table('user_has_roles')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);
    }
}
