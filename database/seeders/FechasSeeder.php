<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FechasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// 1 autonomo
  		for($i=0; $i<=3; $i++){
  			$autonomos_enero = [
		      'fin_cuit' => $i,
        	'fecha' => '2021-01-05',
        	'id_obligacion' => 1,
          'prioridad' => null,
  			];	
  			DB::table('vencimientos')->insert($autonomos_enero);
  		}
  		for($i=4; $i<=6; $i++){
  			$autonomos_enero = [
          'fin_cuit' => $i,
        	'fecha' => '2021-01-06',
        	'id_obligacion' => 1,
          'prioridad' => null,
  			];	
  			DB::table('vencimientos')->insert($autonomos_enero);
  		}
  		for($i=7; $i<=9; $i++){
  			$autonomos_enero = [
		      'fin_cuit' => $i,
        	'fecha' => '2021-01-07',
        	'id_obligacion' => 1,
          'prioridad' => null,
  			];	
  			DB::table('vencimientos')->insert($autonomos_enero);
  		}
    	// 2 monotributo
    	for ($i = 0; $i<=9; $i++){
    		$monotributo_enero = [
    			'fin_cuit' => $i,
        	'fecha' => '2021-01-20',
        	'id_obligacion' => 2,
          'prioridad' => null,
        ];
    		DB::table('vencimientos')->insert($monotributo_enero);
    	}

      //empleadores 3
      for($i=0; $i<=3; $i++){
        $empleadores_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-11',
          'id_obligacion' => 3,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($empleadores_enero);
      }
      for($i=4; $i<=6; $i++){
        $empleadores_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-12',
          'id_obligacion' => 3,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($empleadores_enero);
      }
      for($i=7; $i<=9; $i++){
        $empleadores_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-13',
          'id_obligacion' => 3,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($empleadores_enero);
      }

      //ganancias sociedades 4 
      for($i=0; $i<=3; $i++){
        $ganancias_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-13',
          'id_obligacion' => 4,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($ganancias_enero);
      }
      for($i=4; $i<=6; $i++){
        $ganancias_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-14',
          'id_obligacion' => 4,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($ganancias_enero);
      }
      for($i=7; $i<=9; $i++){
        $ganancias_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-15',
          'id_obligacion' => 4,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($ganancias_enero);
      }

      //anticipos 5 
      for($i=0; $i<=3; $i++){
        $anticipos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-13',
          'id_obligacion' => 5,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($anticipos_enero);
      }
      for($i=4; $i<=6; $i++){
        $anticipos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-14',
          'id_obligacion' => 5,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($anticipos_enero);
      }
      for($i=7; $i<=9; $i++){
        $anticipos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-15',
          'id_obligacion' => 5,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($anticipos_enero);
      }

      //convenio 6 
      for($i=0; $i<=2; $i++){
        $convenio_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-15',
          'id_obligacion' => 6,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($convenio_enero);
      }
      for($i=3; $i<=5; $i++){
        $convenio_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-18',
          'id_obligacion' => 6,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($convenio_enero);
      }
      for($i=6; $i<=7; $i++){
        $convenio_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-19',
          'id_obligacion' => 6,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($convenio_enero);
      }
      for($i=8; $i<=9; $i++){
        $convenio_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-20',
          'id_obligacion' => 6,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($convenio_enero);
      }

      //IVA 7 
      for($i=0; $i<=1; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-18',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }
      for($i=2; $i<=3; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-19',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }
      for($i=4; $i<=5; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-20',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }
      for($i=6; $i<=7; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-21',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }
      for($i=8; $i<=9; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-22',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }

      // 8 interno
      for($i=0; $i<=3; $i++){
        $interno_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-18',
          'id_obligacion' => 8,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($interno_enero);
      }
      for($i=4; $i<=6; $i++){
        $interno_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-19',
          'id_obligacion' => 8,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($interno_enero);
      }
      for($i=7; $i<=9; $i++){
        $interno_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-20',
          'id_obligacion' => 8,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($interno_enero);
      }

      // 9 retenciones primera
      for($i=0; $i<=3; $i++){
        $retencion_p_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-21',
          'id_obligacion' => 9,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_p_enero);
      }
      for($i=4; $i<=6; $i++){
        $retencion_p_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-22',
          'id_obligacion' => 9,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_p_enero);
      }
      for($i=7; $i<=9; $i++){
        $retencion_p_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-25',
          'id_obligacion' => 9,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_p_enero);
      }
      // 10 retenciones segunda
      for($i=0; $i<=3; $i++){
        $retencion_s_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-11',
          'id_obligacion' => 10,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_s_enero);
      }
      for($i=4; $i<=6; $i++){
        $retencion_s_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-12',
          'id_obligacion' => 10,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_s_enero);
      }
      for($i=7; $i<=9; $i++){
        $retencion_s_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-13',
          'id_obligacion' => 10,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_s_enero);
      }

      // 11 particulares
      for ($i = 0; $i<=9; $i++){
        $particulares_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-15',
          'id_obligacion' => 11,
          'prioridad' => 'Obligatorio',
        ];
        DB::table('vencimientos')->insert($particulares_enero);
      }
      for ($i = 0; $i<=9; $i++){
        $particulares_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-01-15',
          'id_obligacion' => 11,
          'prioridad' => 'Voluntario',
        ];
        DB::table('vencimientos')->insert($particulares_enero);
      }


      ///FEBRERO
      // 1 autonomo
      for($i=0; $i<=3; $i++){
        $autonomos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-05',
          'id_obligacion' => 1,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($autonomos_enero);
      }
      for($i=4; $i<=6; $i++){
        $autonomos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-08',
          'id_obligacion' => 1,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($autonomos_enero);
      }
      for($i=7; $i<=9; $i++){
        $autonomos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-09',
          'id_obligacion' => 1,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($autonomos_enero);
      }
      // 2 monotributo
      for ($i = 0; $i<=9; $i++){
        $monotributo_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-22',
          'id_obligacion' => 2,
          'prioridad' => null,
        ];
        DB::table('vencimientos')->insert($monotributo_enero);
      }

      //empleadores 3
      for($i=0; $i<=3; $i++){
        $empleadores_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-09',
          'id_obligacion' => 3,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($empleadores_enero);
      }
      for($i=4; $i<=6; $i++){
        $empleadores_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-10',
          'id_obligacion' => 3,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($empleadores_enero);
      }
      for($i=7; $i<=9; $i++){
        $empleadores_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-11',
          'id_obligacion' => 3,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($empleadores_enero);
      }

      //ganancias sociedades 4 
      for($i=0; $i<=3; $i++){
        $ganancias_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-17',
          'id_obligacion' => 4,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($ganancias_enero);
      }
      for($i=4; $i<=6; $i++){
        $ganancias_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-18',
          'id_obligacion' => 4,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($ganancias_enero);
      }
      for($i=7; $i<=9; $i++){
        $ganancias_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-19',
          'id_obligacion' => 4,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($ganancias_enero);
      }

      //anticipos 5 
      for($i=0; $i<=3; $i++){
        $anticipos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-17',
          'id_obligacion' => 5,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($anticipos_enero);
      }
      for($i=4; $i<=6; $i++){
        $anticipos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-18',
          'id_obligacion' => 5,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($anticipos_enero);
      }
      for($i=7; $i<=9; $i++){
        $anticipos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-19',
          'id_obligacion' => 5,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($anticipos_enero);
      }

      //IVA 7 
      for($i=0; $i<=1; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-18',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }
      for($i=2; $i<=3; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-19',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }
      for($i=4; $i<=5; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-22',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }
      for($i=6; $i<=7; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-23',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }
      for($i=8; $i<=9; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-24',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }

      // 8 interno
      for($i=0; $i<=3; $i++){
        $interno_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-18',
          'id_obligacion' => 8,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($interno_enero);
      }
      for($i=4; $i<=6; $i++){
        $interno_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-19',
          'id_obligacion' => 8,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($interno_enero);
      }
      for($i=7; $i<=9; $i++){
        $interno_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-22',
          'id_obligacion' => 8,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($interno_enero);
      }

      // 9 retenciones primera
      for($i=0; $i<=3; $i++){
        $retencion_p_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-22',
          'id_obligacion' => 9,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_p_enero);
      }
      for($i=4; $i<=6; $i++){
        $retencion_p_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-23',
          'id_obligacion' => 9,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_p_enero);
      }
      for($i=7; $i<=9; $i++){
        $retencion_p_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-24',
          'id_obligacion' => 9,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_p_enero);
      }
      // 10 retenciones segunda
      for($i=0; $i<=3; $i++){
        $retencion_s_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-09',
          'id_obligacion' => 10,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_s_enero);
      }
      for($i=4; $i<=6; $i++){
        $retencion_s_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-10',
          'id_obligacion' => 10,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_s_enero);
      }
      for($i=7; $i<=9; $i++){
        $retencion_s_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-11',
          'id_obligacion' => 10,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_s_enero);
      }

      // 11 particulares
      for ($i = 0; $i<=9; $i++){
        $particulares_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-10',
          'id_obligacion' => 11,
          'prioridad' => 'Obligatorio',
        ];
        DB::table('vencimientos')->insert($particulares_enero);
      }
      for ($i = 0; $i<=9; $i++){
        $particulares_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-02-17',
          'id_obligacion' => 11,
          'prioridad' => 'Voluntario',
        ];
        DB::table('vencimientos')->insert($particulares_enero);
      }

      ///MARZO
      // 1 autonomo
      for($i=0; $i<=3; $i++){
        $autonomos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-05',
          'id_obligacion' => 1,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($autonomos_enero);
      }
      for($i=4; $i<=6; $i++){
        $autonomos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-08',
          'id_obligacion' => 1,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($autonomos_enero);
      }
      for($i=7; $i<=9; $i++){
        $autonomos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-09',
          'id_obligacion' => 1,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($autonomos_enero);
      }
      // 2 monotributo
      for ($i = 0; $i<=9; $i++){
        $monotributo_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-22',
          'id_obligacion' => 2,
          'prioridad' => null,
        ];
        DB::table('vencimientos')->insert($monotributo_enero);
      }

      //empleadores 3
      for($i=0; $i<=3; $i++){
        $empleadores_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-09',
          'id_obligacion' => 3,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($empleadores_enero);
      }
      for($i=4; $i<=6; $i++){
        $empleadores_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-10',
          'id_obligacion' => 3,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($empleadores_enero);
      }
      for($i=7; $i<=9; $i++){
        $empleadores_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-11',
          'id_obligacion' => 3,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($empleadores_enero);
      }

      //ganancias sociedades 4 
      for($i=0; $i<=3; $i++){
        $ganancias_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-15',
          'id_obligacion' => 4,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($ganancias_enero);
      }
      for($i=4; $i<=6; $i++){
        $ganancias_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-16',
          'id_obligacion' => 4,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($ganancias_enero);
      }
      for($i=7; $i<=9; $i++){
        $ganancias_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-17',
          'id_obligacion' => 4,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($ganancias_enero);
      }

      //anticipos 5 
      for($i=0; $i<=3; $i++){
        $anticipos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-15',
          'id_obligacion' => 5,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($anticipos_enero);
      }
      for($i=4; $i<=6; $i++){
        $anticipos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-16',
          'id_obligacion' => 5,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($anticipos_enero);
      }
      for($i=7; $i<=9; $i++){
        $anticipos_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-17',
          'id_obligacion' => 5,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($anticipos_enero);
      }

      //IVA 7 
      for($i=0; $i<=1; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-18',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }
      for($i=2; $i<=3; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-19',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }
      for($i=4; $i<=5; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-22',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }
      for($i=6; $i<=7; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-23',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }
      for($i=8; $i<=9; $i++){
        $iva_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-25',
          'id_obligacion' => 7,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($iva_enero);
      }

      // 8 interno
      for($i=0; $i<=3; $i++){
        $interno_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-18',
          'id_obligacion' => 8,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($interno_enero);
      }
      for($i=4; $i<=6; $i++){
        $interno_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-19',
          'id_obligacion' => 8,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($interno_enero);
      }
      for($i=7; $i<=9; $i++){
        $interno_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-22',
          'id_obligacion' => 8,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($interno_enero);
      }

      // 9 retenciones primera
      for($i=0; $i<=3; $i++){
        $retencion_p_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-22',
          'id_obligacion' => 9,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_p_enero);
      }
      for($i=4; $i<=6; $i++){
        $retencion_p_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-23',
          'id_obligacion' => 9,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_p_enero);
      }
      for($i=7; $i<=9; $i++){
        $retencion_p_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-25',
          'id_obligacion' => 9,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_p_enero);
      }
      // 10 retenciones segunda
      for($i=0; $i<=3; $i++){
        $retencion_s_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-09',
          'id_obligacion' => 10,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_s_enero);
      }
      for($i=4; $i<=6; $i++){
        $retencion_s_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-10',
          'id_obligacion' => 10,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_s_enero);
      }
      for($i=7; $i<=9; $i++){
        $retencion_s_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-11',
          'id_obligacion' => 10,
          'prioridad' => null,
        ];  
        DB::table('vencimientos')->insert($retencion_s_enero);
      }

      // 11 particulares
      for ($i = 0; $i<=9; $i++){
        $particulares_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-10',
          'id_obligacion' => 11,
          'prioridad' => 'Obligatorio',
        ];
        DB::table('vencimientos')->insert($particulares_enero);
      }
      for ($i = 0; $i<=9; $i++){
        $particulares_enero = [
          'fin_cuit' => $i,
          'fecha' => '2021-03-15',
          'id_obligacion' => 11,
          'prioridad' => 'Voluntario',
        ];
        DB::table('vencimientos')->insert($particulares_enero);
      }
    }
}
