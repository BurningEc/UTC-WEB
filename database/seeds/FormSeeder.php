<?php

use App\CompanyType;
use App\VehicleType;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ///campos para los tipos de empresas
        $company = CompanyType::create([
            'name' => 'Otros',
            'description' => 'Describe varios tipos',
            'status' => 'activo',
        ]);
        $company = CompanyType::create([
            'name' => 'Muebles',
            'description' => 'Describe empresas de muebles',
            'status' => 'activo',
        ]);
        $company = CompanyType::create([
            'name' => 'Comida',
            'description' => 'Describe empresas de comida',
            'status' => 'activo',
        ]);

        ///campos para los vehiculos
        $company = VehicleType::create([
            'name' => 'Otros',
            'description' => 'Describe otros',
            'status' => 'activo',
        ]);
        $company = VehicleType::create([
            'name' => 'Motocicleta',
            'description' => 'Describe motocicletas',
            'status' => 'activo',
        ]);
        $company = VehicleType::create([
            'name' => 'Taxi',
            'description' => 'Describe taxis',
            'status' => 'activo',
        ]);
    }
}
