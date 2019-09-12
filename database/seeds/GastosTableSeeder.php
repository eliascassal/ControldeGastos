<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GastosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gastos')->insert([
                'nombregastos' => Str::random(10),
                'descripcion' => Str::random(100),
                'fechagasto'=> date('Y-m-d'),
                'monto' => Int::random(4),
            ]);
    }
}
