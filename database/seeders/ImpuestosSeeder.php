<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImpuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$autonomos = [
          'id_impuesto' => 1,	
          'nombre' => 'Autónomos',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($autonomos);

        $monotributo = [
          'id_impuesto' => 2,	
          'nombre' => 'Monotributo',
          'descripcion' => 'Recalcar recategorización'
        ];
        DB::table('impuestos')->insert($monotributo);

        $iva = [
          'id_impuesto' => 3,	
          'nombre' => 'IVA/IVA DIGITAL',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($iva);

        $empleadores = [
          'id_impuesto' => 4,	
          'nombre' => 'Empleadores',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($empleadores);

        $impuesto = [
          'id_impuesto' => 5,	
          'nombre' => 'Retenciones/percepciones SICORE – SIRE',
          'descripcion' => 'Anticipo mensual'
        ];

        DB::table('impuestos')->insert($impuesto);
        
        $impuesto = [
          'id_impuesto' => 6,	
          'nombre' => 'Ganancias persona jurídica',
          'descripcion' => null
        ];

        DB::table('impuestos')->insert($impuesto);
        
        $impuesto = [
          'id_impuesto' => 7,	
          'nombre' => 'Ganancias persona física',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($impuesto);
        
        $impuesto = [
          'id_impuesto' => 8,	
          'nombre' => 'Anticipos Ganancias - Persona Juridica',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($impuesto);
        
        $impuesto = [
          'id_impuesto' => 9,	
          'nombre' => 'Anticipos Ganancias - Personas Humanas',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($impuesto);
        
        $impuesto = [
          'id_impuesto' => 10,	
          'nombre' => 'Anticipos Bienes personales - Personas Humanas',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($impuesto);

        $impuesto = [
          'id_impuesto' => 11,	
          'nombre' => 'Régimen de información de participaciones societarias',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($impuesto);

        $impuesto = [
          'id_impuesto' => 12,	
          'nombre' => 'Bienes personales acciones y participaciones societarias',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($impuesto);

        $impuesto = [
          'id_impuesto' => 13,	
          'nombre' => 'Personal de casas particulares',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($impuesto);

        $impuesto = [
          'id_impuesto' => 14,	
          'nombre' => 'Convenio multilateral',
          'descripcion' => 'Ver la anual también'
        ];
        DB::table('impuestos')->insert($impuesto);

        $impuesto = [
          'id_impuesto' => 15,	
          'nombre' => 'IB Santa Fe',
          'descripcion' => 'Anual'
        ];
        DB::table('impuestos')->insert($impuesto);

        $impuesto = [
          'id_impuesto' => 16,	
          'nombre' => 'Impuestos al sellos Santa Fe',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($impuesto);

        $impuesto = [
          'id_impuesto' => 17,	
          'nombre' => 'Derecho de registro e inspección Rosario',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($impuesto);

        $impuesto = [
          'id_impuesto' => 18,	
          'nombre' => 'Tarifa de residuos Rosario',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($impuesto);

        $impuesto = [
          'id_impuesto' => 19,	
          'nombre' => 'Derecho publicitario Rosario',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($impuesto);

        $impuesto = [
          'id_impuesto' => 20,	
          'nombre' => 'Régimen de información de fideicomisos anual',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($impuesto);

        $impuesto = [
          'id_impuesto' => 21,	
          'nombre' => 'Presentación de estados contables en PDF',
          'descripcion' => null
        ];
        DB::table('impuestos')->insert($impuesto);
    }
}