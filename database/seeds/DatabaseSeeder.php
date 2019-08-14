<?php

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
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('adminpassword'),
        ]);

        DB::table('groups')->insert([
            'id' => 1,
            'creator_id' => 1,
            'name' => 'Group',
            'description' => 'Group Description',
        ]);
    }
}
