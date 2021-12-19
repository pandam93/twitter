<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FollowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('followers')->insert([
            'user_id' => 1,
            'following_id' => 2
        ]);

        DB::table('followers')->insert([
            'user_id' => 2,
            'following_id' => 1
        ]);

        DB::table('followers')->insert([
            'user_id' => 1,
            'following_id' => 3
        ]);
    }
}
