<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $a = Crypt::encryptString('123456');
// $b= Crypt::decryptString($a);
// dd($b);
        $data=[
            'name' => 'bala',
            'email' => 'admin@gmail.com',
            'phone_number'=>'9788888888',
            'password' =>Crypt::encryptString('123456'),
            'original_password' => '123456'
        ];
        DB::table('admin')->insert($data);
    }
}