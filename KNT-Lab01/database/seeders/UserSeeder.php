<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'email' => 'kimngoctam15@gmail.com',
            'password' => bcrypt('123'),
        ];
        DB::table('user-accounts')->insert($data);
    }
}
