<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{

/*    public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        $listado = Cliente::where('borrado', 0)->paginate(10);
        return view('cliente/index', compact('listado'));
       // return "<h1>HOLA HOLA</h1>";
    }

    public  function create()
    {
        return view('/cliente/create');
    }
    
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required'
        ]);

        $datos = request()->except('_token');
        $cliente = Cliente::create($datos);

        //  dd($aviso);

        /*if ($request->hasFile('imagen')) {
            $request->file('imagen')->store('public/imagenes/avisos/' . $aviso->id);
            $aviso->imagen = $request->file('imagen')->store('public/imagenes/avisos/' . $aviso->id);
        }*/

        $cliente->update();

        $listado = Cliente::where('borrado', 0)->paginate(10);
        return view('cliente/index', compact('listado'));
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
    public function setPublicado($id)
    {
        /*
        $slider = App\Slider::find($id);
        $slider->publicado = !$slider->publicado;

        $slider->save();

        return back()->with('mensaje', 'Slider actualizado!');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Cliente::destroy($id);
        return back()->with('mensaje', 'Cliente eliminado');
    }

    

    public function update(Request $request, $id)
    {

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required'
        ]);
        $datosCliente = request()->except(['_token', '_method']);
        Cliente::where('id', '=', $id)->update($datosCliente);


        $cliente = Cliente::find($id);
        

        $cliente->update();

        $listado = Cliente::where('borrado', 0)->paginate(10);
        //return Redirect::to('avisos/');
        return view('cliente/index', compact('listado'));
    }

    public function editar($id)
    {
        /*
        $slider = App\Slider::findOrFail($id);
        //GET THE LIST OF BRANCHS FOR FILL THE SELECT IINPUT IN THE FORM.
        //  $slider_listado = App\Categoria::all()->where('borrado',0);

        return view('sliders.editar_slider', compact('slider')); */
    }




     /**
     * List clients
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function clients()
    {

        $listado = Cliente::all();
        return response()->json($listado)->withHeaders([
            'Access-Control-Allow-Origin' => 'http://localhost:3000',
        ]);
    }
}
