<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngresosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingresos')->insert([
            'nombreingresos' => Str::random(10),
            'descripcion' => Str::random(100),
            'fechaingreso'=> date('Y-m-d'),
            'monto' => Int::random(4),
        ]);
    }
}
