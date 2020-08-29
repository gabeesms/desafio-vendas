<?php

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
        App\User::firstOrCreate(
            [
                'email' => 'gabrielle@email.com'
            ],
            [
                'name' => 'Administrador',
                'password' => bcrypt('12345678')
            ]
        );
    }
}
