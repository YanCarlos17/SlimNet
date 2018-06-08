<?php
use App\UserModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\UserModel::create([
            
            'nombre' => 'Gurnilfo Pencora',
            'email' => 'email@mail.com.co',
            'telefono' => '5598664',
            'cod_profesion' => '4',
        ]);
    }
}
