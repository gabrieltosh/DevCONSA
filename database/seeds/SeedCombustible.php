<?php

use Illuminate\Database\Seeder;
use App\Combustible;
class SeedCombustible extends Seeder
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
                'tipo'=>'Gasolina',
                'precio'=>'3.45',
                'descripcion'=>'Gasolina'
            ],
            [
                'tipo'=>'Diesel',
                'precio'=>'3.45',
                'descripcion'=>'Diesel'
            ],
            [
                'tipo'=>'GNV Gas',
                'precio'=>'3.45',
                'descripcion'=>'Gas Liquido'
            ],
        );
        Combustible::insert($datos);
    }
}
