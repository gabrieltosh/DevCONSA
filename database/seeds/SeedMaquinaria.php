<?php

use Illuminate\Database\Seeder;
use App\Maquinaria;
class SeedMaquinaria extends Seeder
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
                'imagen'=>'maquinaria.png',
                'placa'=>'456-RFG',
                'modelo'=>'Vagoneta',
                'color'=>'negro',
                'marca'=>'Volvo',
                'kilometraje'=>'34543',
                'capacidad'=>'1 Tonelada',
                'detalle'=>null,
                'estado'=>'bueno',
                'tipo'=>'propio',
                'activo'=>1,
                'combustible_id'=>1
            ],
            [
                'imagen'=>'maquinaria.png',
                'placa'=>'436-AEG',
                'modelo'=>'Camion',
                'color'=>'verde',
                'marca'=>'Brasilia',
                'kilometraje'=>'12243',
                'capacidad'=>'1/2 Tonelada',
                'detalle'=>null,
                'estado'=>'bueno',
                'tipo'=>'propio',
                'activo'=>1,
                'combustible_id'=>2
            ],
            [
                'imagen'=>'maquinaria.png',
                'placa'=>'146-DRH',
                'modelo'=>'Tractor',
                'color'=>'azul',
                'marca'=>'Volvo',
                'kilometraje'=>'5673',
                'capacidad'=>'3 Tonelada',
                'detalle'=>null,
                'estado'=>'bueno',
                'tipo'=>'propio',
                'activo'=>1,
                'combustible_id'=>3
            ],
            [
                'imagen'=>'maquinaria.png',
                'placa'=>'292-IUG',
                'modelo'=>'Vagoneta',
                'color'=>'celeste',
                'marca'=>'Volvo',
                'kilometraje'=>'67885',
                'capacidad'=>'1 Tonelada',
                'detalle'=>null,
                'estado'=>'bueno',
                'tipo'=>'propio',
                'activo'=>1,
                'combustible_id'=>2
            ]
        );
        Maquinaria::insert($datos);
    }

}
