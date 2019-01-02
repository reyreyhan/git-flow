<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'reyhan',
            'email' => 'reyhan@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
