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
            'role' => 'admin',
            'contact' => '081000000000'
        ]);

        // second user without role
        DB::table('users')->insert([
            'name' => 'Adi Nurdiansah',
            'email' => 'adi@mail.com',
            'password' => bcrypt('rahasia123'),
            'role' => 'pegawai',
            'contact' => '081000000099'
        ]);
    }
}
