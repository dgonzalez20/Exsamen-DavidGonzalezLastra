<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $user=user::create({
             <?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        public function run() {
            $user = User::create([
                        'doi' => $this->faker->unique()->dni(),
                        'name' => 'David',
                        'apellidos' => 'Gonzalez',
                        'fechalta' => "2022-02-10",
                        'email' => 'dgonzalezl@cifpfbmoll.eu',
                        'email_verified_at' => now(),
                        'password' => Hash::make('secretos'),
                        'remember_token' => Str::random(10),
            ]);
    }
}

         })
    }
}
