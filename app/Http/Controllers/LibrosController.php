<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;
use Monolog\Formatter\JsonFormatter;

class LibrosController extends Controller
{
    //con este constructor no dejamos acceder a los metodos sin loguearse
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Libros::all() de aqui se obtinen todos los datos de la DDBB
        //recorremos los libros y comparamos el id del usuario logueado con el id_donante,
        //para obtener solo los libros donados por el usuario logueado
        foreach (Libros::all() as $libro) {
            if ($libro['id_donante']==auth()->id()) {
                $libros[]=$libro;//guardamos estos libros y se los pasamos a la vista con el compact("libros")
            }
        }
        
        return view('libros.listaLibros', compact("libros"));
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //En la vista home tenemos el formulario para regitrar un libro
        return view('libros.registroLibros');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $datosLibros = request()->all();
        $datosLibro = request()->except("_token");
        $datosLibro['id_donante'] = auth()->id();
        $datosLibro['habilitado'] = true;
        Libros::insert($datosLibro);
        // return response()->json($datosLibro);
        //return view('libros.registroLibros');
        return redirect()->route('home')->with('reg', 'Su libro ha sido registrado');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show(Libros $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
        $libro = Libros::findOrFail($id);
        return view('libros.editarLibro', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
        $datosLibro = request()->except(['_token','_method']);
        Libros::where('id', '=', $id)->update($datosLibro);

        $libro = Libros::findOrFail($id);
        //return view('libros.editarLibro', compact('libro'));
        return redirect()->route('home')->with('info', 'Su libro ha sido editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */


    public function destroy($id, $habilitado)
    {
        if ($habilitado==1) {
            $habilitado = 0;
        } else {
            $habilitado = 1;
        }

        $libro = Libros::findOrFail($id);
        $libro = request()->except(['_token','_method']);
        $libro['habilitado']=$habilitado;
        
        Libros::where('id', '=', $id)->update($libro);

        foreach (Libros::all() as $libro) {
            if ($libro['id_donante']==auth()->id()) {
                $libros[]=$libro;//guardamos estos libros y se los pasamos a la vista con el compact("libros")
            }
        }

        return view('libros.listaLibros', compact("libros", "habilitado"));
    }
}
