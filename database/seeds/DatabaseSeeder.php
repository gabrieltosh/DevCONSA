<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeedCombustible::class);
        $this->call(SeedMaquinaria::class);
        $this->call(SeedUsuarios::class);
        $this->call(SeedProyecto::class);
        $this->call(SeedTanques::class);
    }
}
