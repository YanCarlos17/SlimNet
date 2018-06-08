<?php

use App\Profesion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class profesion_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Profesion::table([
            'codigo' => '4',
            'titulo' => 'Social- Media',
        ]);

        //DB::table('Profesion')->insert([
        //    'titulo'=>'Desarrollador Backend'
        //]);
        //DB::table('Profesion')->insert([
        //    'titulo'=>'Diseñador Web'
        //]);
        //DB::table('Profesion')->insert([
        //    'titulo'=>'Diseñador Gráfico'
        //]);
    }
}
