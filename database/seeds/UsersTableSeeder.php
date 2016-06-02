<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // first user with admin role
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ]);

        // second user without role
        DB::table('users')->insert([
            'name' => 'Adi Nurdiansah',
            'email' => 'adi@mail.com',
            'password' => bcrypt('rahasia123'),
        ]);

        // third user with kargo role
        DB::table('users')->insert([
            'name' => 'Zain F Fauzi',
            'email' => 'zain@mail.com',
            'password' => bcrypt('rahasia123'),
            'role' => 'kargo'
        ]);
    }
}
