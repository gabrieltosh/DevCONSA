<?php

use Illuminate\Database\Seeder;
use App\User;
class SeedUsuarios extends Seeder
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
                    'nombre'=>'Gabriel Angel',
                    'apellido'=>'Pinto Cutili',
                    'ci'=>'13149840',
                    'activo'=>1,
                    'telefono'=>'76518845',
                    'cargo'=>'Admnistrador',
                    'nacimiento'=>\Date::now(),
                    'genero'=>'masculino',
                    'email'=>'admin@gmail.com',
                    'direccion'=>'Av.San Antonio ',
                    'tipo'=>'administrador',
                    'imagen'=>'perfil.png',
                    'password'=>\Hash::make('12345678'),
                ],
                [
                    'nombre'=>'Luis Perez',
                    'apellido'=>'Alvarado',
                    'ci'=>'13149822',
                    'activo'=>1,
                    'telefono'=>'76528845',
                    'cargo'=>'Gerente',
                    'nacimiento'=>\Date::now(),
                    'genero'=>'masculino',
                    'email'=>'gerente@gmail.com',
                    'direccion'=>'Av.San Antonio ',
                    'tipo'=>'gerente',
                    'imagen'=>'perfil.png',
                    'password'=>\Hash::make('12345678'),
                ],
                [
                    'nombre'=>'Limbert Perez',
                    'apellido'=>'Choque',
                    'ci'=>'13149672',
                    'activo'=>1,
                    'telefono'=>'76128845',
                    'cargo'=>'Conductor',
                    'nacimiento'=>\Date::now(),
                    'genero'=>'masculino',
                    'email'=>'empleado@gmail.com',
                    'direccion'=>'Av.San Antonio ',
                    'tipo'=>'Empleado',
                    'imagen'=>'perfil.png',
                    'password'=>\Hash::make('12345678'),
                ]
            );
        User::insert($datos);
    }
}
