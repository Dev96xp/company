<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Registri ingresado manualmente

        $user = User::create([
            'name' => 'David Martinez',
            'email' => 'dm.imagesz@hotmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('Admin');
        User::factory(99)->create();
    }
}
