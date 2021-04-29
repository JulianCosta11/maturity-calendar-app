<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CuitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        return view('client');        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validCuit(Request $r)
    {
        $r->validate([
            'cuit' => ''
        ]);

        $cuit = $r->get('cuit');


        $url = "https://afip.tangofactura.com/Rest/GetContribuyenteFull?cuit=".$cuit;
        $curl = curl_init();


        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Connection: keep-alive',
            'sec-ch-ua: "Chromium";v="88", "Google Chrome";v="88", ";Not A Brand";v="99"',
            'sec-ch-ua-mobile: ?0',
            'Upgrade-Insecure-Requests: 1',
            'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.104 Safari/537.36',
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
            'Sec-Fetch-Site: none',
            'Sec-Fetch-Mode: navigate',
            'Sec-Fetch-User: ?1',
            'Sec-Fetch-Dest: document',
            'Accept-Language: es-ES,es;q=0.9,en;q=0.8'
        ));
        $result = curl_exec($ch);
        curl_close($ch);
        $nombre = '';
        $tipoPersona = 'Error al obtener información';
        $r = json_decode($result);
        if (isset($r->Contribuyente->nombre)) {
            $nombre = $r->Contribuyente->nombre;
        }
        if (isset($r->Contribuyente->tipoPersona)) {
            $tipoPersona = $r->Contribuyente->tipoPersona;

        }    

        $impuestos = DB::table('impuestos')->get();            

        $tipoPersona = json_encode($tipoPersona);
        $nombre = json_encode($nombre);
        $nombre = substr($nombre, 1,-1);
        $finCuit = substr($cuit, -1);

        //$vencimiento = self::calcularVencimiento($finCuit, $impuestos);



        return view('client', compact(['cuit','nombre', 'tipoPersona', 'impuestos', 'finCuit']));
    }

    public function addClient(Request $r){
        $ahora = date('Y-m-d H:i:s');
        $valid = true;
        $mensaje = '';

        //parametros cliente
        $cuit = $r->get('cuit');
        $brand = $r->get('brand');
        $descripcion = $r->get('descripcion');
        $nombre = $r->get('nombre');

        //parametros impuestos
        $impuestos = $r->get('impuestos');

        //inicio validacion
        if (empty($cuit)) {
            $valid = false;
            $mensaje .= ' - No se ingreso CUIT';
        }
        if (empty($brand)) {
            $valid = false;
            $mensaje .= ' - Problema de sesion';
        }
        if (empty($descripcion)) {
            $descripcion = null;
        }
        if (empty($nombre)) {
            $valid = false;
            $mensaje .= ' - No se ingreso Razon Social';
        }

        if (empty($impuestos)) {
            $valid = false;
            $mensaje .= ' - No se recibieron impuestos';
        }
        //fin validacion

        if ($valid) {
            $idCliente = DB::table('clientes')
                        ->insertGetId([
                            'brand' => $brand,
                            'created_at' => $ahora,
                            'cuit' => $cuit,
                            'descripcion' => $descripcion,
                            'razon_social' => $nombre
                        ], 'id_cliente');

            if (!empty($idCliente)) {
                foreach ($impuestos as $i) {
                    DB::table('clientes_impuestos')
                        ->insertGetId([
                            'id_cliente' => $idCliente,
                            'id_impuesto' => $i,
                            'created_at' => $ahora,
                        ], 'id_cliente');                
                }
            }
            $mensaje = 1;
        }
        return view('home', compact(['mensaje']));
    }

    public function calcularVencimiento($finCuit, $obligaciones){
        $mesHoy = date('m');
        

        $idObligacion = array();
        foreach ($obligaciones as $o) {
            if ($o->idImpuesto == 20) {
                array_push($idObligacion, 2);
            } elseif ($o->idImpuesto == 10) {
                array_push($idObligacion, 4);
            } elseif ($o->idImpuesto == 30) {
                array_push($idObligacion, 7);
            }      
        }
        $vencimiento = DB::table('vencimientos as v')
                        ->join('obligaciones as o', 'v.id_obligacion','=','o.id_obligacion')
                        ->select('v.fecha', 'o.nombre')
                        ->where('v.fin_cuit',  $finCuit)
                        ->whereIn('v.id_obligacion', $idObligacion)
                        ->whereMonth('fecha', '=', $mesHoy)
                        ->orderBy('o.nombre', 'ASC')
                        ->get();

        if (isset($vencimiento)) {
            return $vencimiento;
        } else {
            return 'No se obtuvieron datos';
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
