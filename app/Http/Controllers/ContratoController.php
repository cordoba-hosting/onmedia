<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\Cliente;
use App\Models\Servicio;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado = Contrato::where('vigente', true)->paginate(10);

       // dd($listado);
        return view('contrato/index', compact('listado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::where('borrado', false)->get();
        $servicios = Servicio::where('borrado', false)->get();

        return view('/contrato/create', compact('clientes', 'servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idCliente' => 'required',
            'idServicio' => 'required',
            'fecha_alta' => 'required',
            'fecha_vencimiento' => 'required',
            'dominio' => 'required',
        ]);

        $datos = request()->except('_token');
        $contrato = Contrato::create($datos);

        //dd($contrato);

        /*if ($request->hasFile('imagen')) {
            $request->file('imagen')->store('public/imagenes/avisos/' . $aviso->id);
            $aviso->imagen = $request->file('imagen')->store('public/imagenes/avisos/' . $aviso->id);
        }*/

        $contrato->update();

        $listado = Contrato::where('vigente', true)->paginate(10);
        return view('contrato/index', compact('listado'));

        
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
