<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Deberia usar el modelo de user pero no me da la gana
use Illuminate\Support\Str;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
            'name' => 'Carlos Millan',
            'username' => 'carlitos',
            'email' => 'carlos@twitter.test',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        factory(User::class, 49)->create();
    }
}
