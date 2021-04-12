<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->truncate();
        DB::table('admin_users')->insert([
            [
                'username' => 'admin',
                'name' => 'admin',
                'password' => '$2y$10$HxAprechgq3E0cGFnmlgOu2Czjm.9OvHPMuhSpAf5Stc3mpmBkoxa', // admin
            ]
        ]);

        DB::table('admin_role_users')->truncate();
        DB::table('admin_role_users')->insert([
            [
                'role_id' => 1,
                'user_id' => 1,
            ],
            [
                'role_id' => 2,
                'user_id' => 1,
            ],
        ]);
    }
}
