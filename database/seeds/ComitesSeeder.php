<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('committes')->insert([
            'comite' => 'CT-01 Textil',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-03 Construcción',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-04 Petróleo, Gas y sus Derivados',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-05 Automotriz',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-06 Higiene, Seguridad y Protección',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-07 Materiales Ferrosos',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-08 Materiales Metálicos no Ferrosos',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-09 Equipos y Productos Odontológicos',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-10 Productos Alimenticios',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-11 Electricidad y Electrónica',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-12 Calzado',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-13 Química',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-14 Metrología',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-15 Documentación y Ciencias de la Información',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-16 Embases y Embalajes',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-19 Pulpa, Papel y Cartón',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-20 Mecánica',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-21 Compras del Estado',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-22 Ensayos no destructivos',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-23 Calidad',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-25 Gestión Ambiental',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-26 Cerámica Fina',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-27 Concreto',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-28 Aglomerantes',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-29 Productos Cerámicos',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-30 Productos de Plásticos',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-35 Pinturas, Pigmentos y afines',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-36 Detergentes y afines',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-37 Polímeros. Resinas Termoplásticas',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-39 Agroquímica',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-41 Maquinarias y Equipos de Izamiento de Carga',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-42 Técnicas Estadísticas',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-43 Evaluación de la Conformidad',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-44 Calidad Ambiental',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-VIN Número de Identificación de Vehículos',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-XIII Cines',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-XII Servicios',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-XIV Carbón',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-XV Materiales y Equipos para Dotación Educativa y de Oficinas',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-XXI Cueros, Calzados y afines',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-XXIII Materiales Aislantes',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-XXII Materiales Refractarios',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-XXIX Código de Barras y EDI',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-XXVI Farmacia, Cosméticos y afines',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-XXVIII Transporte',
        ]);

        DB::table('committes')->insert([
            'comite' => 'CT-XXXI Prendas de Vestir',
        ]);

        DB::table('committes')->insert([
            'comite' => 'Res.113-16 Seguridad de Bicicleta de Uso Infantil',
        ]);
    }
}
