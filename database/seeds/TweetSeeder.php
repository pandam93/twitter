<?php

use Illuminate\Database\Seeder;
use App\Tweet;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tweet::create([
            'user_id' => 2,
            'body'  => 'Tweet One',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Tweet::create([
            'user_id' => 2,
            'body' => 'Tweet Two',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Tweet::create([
            'user_id' => 3,
            'body' => 'Meow',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        factory(Tweet::class, 20)->create();
    }
}
