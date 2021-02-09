<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegulationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regulations')->insert([
            'name' => 'Leyes Constitucionales',
        ]);

        DB::table('regulations')->insert([
            'name' => 'Leyes Orgánicas',
        ]);

        DB::table('regulations')->insert([
            'name' => 'Resoluciones',
        ]);

        DB::table('regulations')->insert([
            'name' => 'Decretos',
        ]);

        DB::table('regulations')->insert([
            'name' => 'Ordenanzas',
        ]);
    }
}
