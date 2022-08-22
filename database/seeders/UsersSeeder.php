<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\user;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
			[
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password' => bcrypt('1111'),
                'role'=>'admin',
			],
			[
                'name'=>'Konsumen',
                'email'=>'konsumen@gmail.com',
                'password' => bcrypt('2222'),
                'role'=>'konsumen',
            ],
        ]);
    }
}
