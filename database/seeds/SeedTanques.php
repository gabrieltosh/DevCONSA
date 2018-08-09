<?php

use Illuminate\Database\Seeder;
use App\Tanque;
class SeedTanques extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=array(
            [
                'nombre'=>'tanque 1',
                'capacidad'=>'56473',
                'total'=>'56473',
                'proyecto_id'=>1,
                'combustible_id'=>1,
            ],
            [
                'nombre'=>'tanque 2',
                'capacidad'=>'56473',
                'total'=>'56473',
                'proyecto_id'=>1,
                'combustible_id'=>2,
            ],
            [
                'nombre'=>'tanque 3',
                'capacidad'=>'56473',
                'total'=>'56473',
                'proyecto_id'=>1,
                'combustible_id'=>3,
            ],
        );
        Tanque::insert($datos);
    }
}
