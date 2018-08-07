<?php

use Illuminate\Database\Seeder;
use App\Proyecto;

class SeedProyecto extends Seeder
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
                'nombre'=>'Carretera Coroico',
                'longitud'=>'34566',
                'numeroContrato'=>'435435-A',
                'fechaContrato'=>Date::now(),
                'monto'=>'56754',
                'plazo'=>'56',
                'fechaProceder'=>Date::now(),
            ],
            [
                'nombre'=>'Carretera Yungas',
                'longitud'=>'34566',
                'numeroContrato'=>'878734-A',
                'fechaContrato'=>Date::now(),
                'monto'=>'56754',
                'plazo'=>'56',
                'fechaProceder'=>Date::now(),
            ],
            [
                'nombre'=>'Carretera Viacha',
                'longitud'=>'34566',
                'numeroContrato'=>'65655-A',
                'fechaContrato'=>Date::now(),
                'monto'=>'56754',
                'plazo'=>'56',
                'fechaProceder'=>Date::now(),
            ],
        );
        Proyecto::insert($datos);
    }
}
