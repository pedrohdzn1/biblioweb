<?php

namespace App\Http\Controllers;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;

class ContactaController extends Controller
{
    public function index(){
            return view('formu');
    }
    //recuperamos info desde el formulario mediante el objeto request
    public function store(Request $request){ 
        //validaciones
        $request->validate([
        'nombre' => 'required',
        'email' => 'required|email',
        'mensaje' => 'required',
        ]);

        //al controlador también se le pasa lo capturado dl form
        $correo = new ContactoMailable($request->all());
        Mail::to('pedrohdzn@gmail.com')->send($correo);

        return view ('enviado');
        //para redirigir
        //return redirect()->route('home')-with('info'), 'Su mensaje ha sido enviado correctamente');
    }
}
