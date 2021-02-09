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
        App\User::create([
			'name' => 'Magno Carrera',
			'email' => 'mgncarrera22@gmail.com',
			'password' => bcrypt('ale220787')
        ]);
    }
}
