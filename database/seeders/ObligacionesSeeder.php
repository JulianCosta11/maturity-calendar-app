<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObligacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $autonomo = [
          'id_obligacion' => 1,	
          'nombre' => 'Autónomo',
        ];
        DB::table('obligaciones')->insert($autonomo);

        $monotributo = [
          'id_obligacion' => 2,	
          'nombre' => 'Monotributo',
        ];
        DB::table('obligaciones')->insert($monotributo);

        $empleadores = [
          'id_obligacion' => 3,	
          'nombre' => 'Empleadores',
        ];
        DB::table('obligaciones')->insert($empleadores);

        $ganancias = [
          'id_obligacion' => 4,	
          'nombre' => 'Ganancias Personas Físicas',
        ];
        DB::table('obligaciones')->insert($ganancias);

        $ganancias = [
          'id_obligacion' => 5,	
          'nombre' => 'Ganancias Personas Jurídicas',
        ];
        DB::table('obligaciones')->insert($ganancias);

        $anticipos = [
          'id_obligacion' => 6,	
          'nombre' => 'Anticipos Ganancias - Persona Juridica',
        ];
        DB::table('obligaciones')->insert($anticipos);

        $anticipos = [
          'id_obligacion' => 7,	
          'nombre' => 'Anticipos de Ganancias - Personas Humanas',
        ];
        DB::table('obligaciones')->insert($anticipos);

        $anticipos = [
          'id_obligacion' => 8,	
          'nombre' => 'Anticipos Bienes personales - Personas Humanas',
        ];
        DB::table('obligaciones')->insert($anticipos);

        $convenio = [
          'id_obligacion' => 9,	
          'nombre' => 'Convenio multilateral',
        ];
        DB::table('obligaciones')->insert($convenio);

        $iva = [
          'id_obligacion' => 10,	
          'nombre' => 'IVA',
        ];
        DB::table('obligaciones')->insert($iva);

        $interno = [
          'id_obligacion' => 11,	
          'nombre' => 'Internos (excepto cigarrillos) DDJJ',
        ];
        DB::table('obligaciones')->insert($interno);

        $retenciones_p = [
          'id_obligacion' => 12,	
          'nombre' => 'Retenciones primera',
        ];
        DB::table('obligaciones')->insert($retenciones_p);

        $retenciones_s = [
          'id_obligacion' => 13,	
          'nombre' => 'Retenciones Segunda',
        ];
        DB::table('obligaciones')->insert($retenciones_s);

        $particulares = [
          'id_obligacion' => 14,	
          'nombre' => 'Personal de Casas Particulares',
        ];
        DB::table('obligaciones')->insert($particulares);

        $particulares = [
          'id_obligacion' => 15,	
          'nombre' => 'Régimen de información de participaciones societarias',
        ];
        DB::table('obligaciones')->insert($particulares);

        $particulares = [
          'id_obligacion' => 16,	
          'nombre' => 'Bienes personales acciones y participaciones societarias',
        ];
        DB::table('obligaciones')->insert($particulares);

        $particulares = [
          'id_obligacion' => 17,	
          'nombre' => 'Bienes personales acciones y participaciones societarias',
        ];
        DB::table('obligaciones')->insert($particulares);

        $particulares = [
          'id_obligacion' => 18,	
          'nombre' => 'IB Santa Fe',
        ];
        DB::table('obligaciones')->insert($particulares);

        $particulares = [
          'id_obligacion' => 19,	
          'nombre' => 'IB Santa Fe',
        ];
        DB::table('obligaciones')->insert($particulares);

        $particulares = [
          'id_obligacion' => 20,	
          'nombre' => 'Impuestos al sellos Santa Fe (primera quincena)',
        ];
        DB::table('obligaciones')->insert($particulares);

        $particulares = [
          'id_obligacion' => 21,	
          'nombre' => 'Impuestos al sellos Santa Fe (segunda quincena)',
        ];
        DB::table('obligaciones')->insert($particulares);

        $particulares = [
          'id_obligacion' => 22,	
          'nombre' => 'Derecho de registro e inspección Rosario',
        ];
        DB::table('obligaciones')->insert($particulares);

        $particulares = [
          'id_obligacion' => 23,	
          'nombre' => 'Tarifa de residuos Rosario',
        ];
        DB::table('obligaciones')->insert($particulares);

        $particulares = [
          'id_obligacion' => 24,	
          'nombre' => 'Derecho publicitario Rosario',
        ];
        DB::table('obligaciones')->insert($particulares);

        $particulares = [
          'id_obligacion' => 25,	
          'nombre' => 'Régimen de información de fideicomisos',
        ];
        DB::table('obligaciones')->insert($particulares);

        $particulares = [
          'id_obligacion' => 26,	
          'nombre' => 'Presentación de estados contables en PDF',
        ];
        DB::table('obligaciones')->insert($particulares);

    }
}