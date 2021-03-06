<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'role' => '1',
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@123'),
        ]);


    for ($x = 1; $x <= 16; $x++) {
        DB::table('category')->insert([
            'category' => 'brand '.$x,
            'image' => 'brand-'.$x.'.png'
        ]);
    }
 
    for ($x = 1; $x <= 13; $x++) {
        DB::table('product')->insert([
            'category_id' => $x,
            'product' => 'product-'.$x,
            'remark' => '',
            'price' => '0',
            'image' => 'product-'.$x.'.jpeg'
        ]);
    }

    }
}
