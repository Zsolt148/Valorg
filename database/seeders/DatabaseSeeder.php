<?php

namespace Database\Seeders;

use App\Models\User;
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
        $this->call(
            linkSeeder::class,
        );

        if(!User::where('email', 'b.zsolt148@gmail.com')->first()) {
            DB::table('users')->insert([
                'name' => 'Budai Zsolt',
                'email' => 'b.zsolt148@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
