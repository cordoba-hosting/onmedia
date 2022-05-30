<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Servicio;

class ServicioController extends Controller
{
    /*    public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        $listado = Servicio::where('borrado', 0)->paginate(10);
        return view('servicio/index', compact('listado'));
       // return "<h1>HOLA HOLA</h1>";
    }

    public  function create()
    {
        return view('/servicio/create');
        
    }
    
    public function edit($id)
    {
        $servicio = Servicio::find($id);
        return view('servicio.edit', compact('servicio'));
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
            'periodo_facturacion' => 'required'
        ]);

        $datos = request()->except('_token');
        $cliente = Servicio::create($datos);

        //  dd($aviso);

        /*if ($request->hasFile('imagen')) {
            $request->file('imagen')->store('public/imagenes/avisos/' . $aviso->id);
            $aviso->imagen = $request->file('imagen')->store('public/imagenes/avisos/' . $aviso->id);
        }*/

        $cliente->update();

        $listado = Servicio::where('borrado', 0)->paginate(10);
        return view('servicio/index', compact('listado'));
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
        $slider = App\Servicio::find($id);
        $slider->publicado = !$slider->publicado;

        $slider->save();

        return back()->with('mensaje', 'Slider actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Servicio::destroy($id);
        return back()->with('mensaje', 'Servicio eliminado');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nombre' => 'required',
            'periodo_facturacion' => 'required'
        ]);
        $datosCliente = request()->except(['_token', '_method']);
        Servicio::where('id', '=', $id)->update($datosCliente);


        $cliente = Servicio::find($id);
        

        $cliente->update();

        $listado = Servicio::where('borrado', 0)->paginate(10);
        //return Redirect::to('avisos/');
        return view('servicio/index', compact('listado'));
    }

    public function editar($id)
    {
        $slider = App\Slider::findOrFail($id);
        //GET THE LIST OF BRANCHS FOR FILL THE SELECT IINPUT IN THE FORM.
        //  $slider_listado = App\Categoria::all()->where('borrado',0);

        return view('sliders.editar_slider', compact('slider'));
    }
}
