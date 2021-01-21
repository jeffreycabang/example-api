<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        $user = DB::table('users')->insertGetId([
            'name' => 'Jeffrey Cabang',
            'email' => 'jeffreycabang@gmail.com',
            'password' => bcrypt('123qwe')
        ]);

        $category = DB::table('ref_category')->insertGetId([
            'category' => 'Test1',
            'created_by' => 1
        ]);

         $category = DB::table('ref_category')->insertGetId([
            'category' => 'Test2',
            'created_by' => 1
        ]);

         $category = DB::table('ref_category')->insertGetId([
            'category' => 'Test3',
            'created_by' => 1
        ]);

         $sub_category = DB::table('ref_sub_category')->insertGetId([
            'category_id' => 1,
            'sub_category' => 'Sub Test1',
            'created_by' => 1
        ]);

         $sub_category = DB::table('ref_sub_category')->insertGetId([
            'category_id' => 1,
            'sub_category' => 'Sub Test2',
            'created_by' => 1
        ]);

         $sub_category = DB::table('ref_sub_category')->insertGetId([
            'category_id' => 2,
            'sub_category' => 'Sub Test3',
            'created_by' => 1
        ]);
    }
}
