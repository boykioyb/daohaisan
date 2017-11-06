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
        $users = [
            ['name' => 'Quang Hoa', 'username' => 'boykioyb', 'status' => 1, 'email' => 'boykioyb96@gmail.com', 'address' => 'nghia lo - van chan - yen bai', 'password' => Hash::make('hoathan'), 'phone' => '0979008320'],
            ['name' => 'admin', 'username' => 'admin', 'status' => 1, 'email' => 'admin@gmail.com', 'address' => 'admin', 'password' => Hash::make('admin'), 'phone' => '0979008320'],
        ];
        foreach ($users as $value) {
            DB::table('users')->insert($value);
        }
    }
}
