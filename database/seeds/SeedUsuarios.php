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
                    'password'=>\Hash::make('12345678') ,
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
                    'password'=>\Hash::make('12345678') ,
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
                    'password'=>\Hash::make('12345678') ,
                ]
            );
        User::insert($datos);

        $faker = Faker\Factory::create();

        for($i=1;$i<=10;$i++)
        {
            User::create([
                'nombre'=>$faker->firstName,
                'apellido'=>$faker->lastName,
                'ci'=>$faker->randomNumber($nbDigits = 8, $strict = true),
                'telefono'=>$faker->randomNumber($nbDigits = 8, $strict = true),
                'cargo'=>$faker->randomElement($array = array ('Gerente General','Administrador','Contador','Conductor','Operario')),
                'nacimiento'=>$faker->date($format = 'Y-m-d', $max = '2000-01-01'),
                'genero'=>$faker->randomElement($array = array ('femenino','masculino')),
                'email'=>$faker->email,
                'direccion'=>$faker->address,
                'tipo'=>'empleado',
                'imagen'=>'perfil.png',
                'password'=>'12345678',
                'activo'=>1,
                'maquinaria_id'=>$faker->randomElement($array = array (1,2,3,4)),
            ]);
            User::create([
                'nombre'=>$faker->firstName,
                'apellido'=>$faker->lastName,
                'ci'=>$faker->randomNumber($nbDigits = 8, $strict = true),
                'telefono'=>$faker->randomNumber($nbDigits = 8, $strict = true),
                'cargo'=>$faker->randomElement($array = array ('Gerente General','Administrador','Contador','Conductor','Operario')),
                'nacimiento'=>$faker->date($format = 'Y-m-d', $max = '2000-01-01'),
                'genero'=>$faker->randomElement($array = array ('femenino','masculino')),
                'email'=>$faker->email,
                'direccion'=>$faker->address,
                'tipo'=>'gerente',
                'imagen'=>'perfil.png',
                'password'=>'12345678',
                'activo'=>1,
            ]);
            User::create([
                'nombre'=>$faker->firstName,
                'apellido'=>$faker->lastName,
                'ci'=>$faker->randomNumber($nbDigits = 8, $strict = true),
                'telefono'=>$faker->randomNumber($nbDigits = 8, $strict = true),
                'cargo'=>$faker->randomElement($array = array ('Gerente General','Administrador','Contador','Conductor','Operario')),
                'nacimiento'=>$faker->date($format = 'Y-m-d', $max = '2000-01-01'),
                'genero'=>$faker->randomElement($array = array ('femenino','masculino')),
                'email'=>$faker->email,
                'direccion'=>$faker->address,
                'tipo'=>'administrador',
                'imagen'=>'perfil.png',
                'password'=>'12345678',
                'activo'=>1,
            ]);
        }
    }
}
