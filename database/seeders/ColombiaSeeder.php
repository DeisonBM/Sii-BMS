<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Department;
use App\Models\City;
use League\Csv\Reader;
use Illuminate\Support\Facades\DB;

class ColombiaSeeder extends Seeder
{
    public function run()
    {
        // ✅ Deshabilitar claves foráneas temporalmente para evitar errores
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // 🔄 Vaciar las tablas antes de insertar datos nuevos
        City::truncate();
        Department::truncate();
        Country::truncate();

        // ✅ Crear país (Colombia)
        $country = Country::firstOrCreate([
            'name' => 'Colombia',
            'code' => 'CO', // Código ISO del país
        ]);

        // 📌 Ruta del CSV (AJUSTADA)
        $csvPath = base_path('app/additional/colombia.csv');  

        // 📂 Leer el archivo CSV
        $csv = Reader::createFromPath($csvPath, 'r');
        $csv->setHeaderOffset(0); // La primera fila es el encabezado

        // 🔄 Iterar sobre cada fila del CSV
        foreach ($csv as $record) {
            $departmentName = trim($record['DEPARTAMENTO']);
            $cityName = trim($record['MUNICIPIO']);
            $cityCode = trim($record['CÓDIGO DANE DEL MUNICIPIO']);

            // ✅ Insertar o recuperar el departamento
            $department = Department::firstOrCreate([
                'name' => $departmentName,
                'country_id' => $country->id, // Relación con el país
            ]);

            // ✅ Insertar la ciudad con su código
            City::firstOrCreate([
                'name' => $cityName,
                'code' => $cityCode,
                'department_id' => $department->id, // Relación con el departamento
            ]);
        }

        // ✅ Rehabilitar claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // 🎉 Mensaje de éxito
        $this->command->info('✅ Se ha completado la importación de departamentos y municipios de Colombia.');
    }
}
