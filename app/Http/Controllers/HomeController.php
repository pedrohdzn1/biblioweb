<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        

        if ($request){
            $query = trim($request->get('search'));

            $libros = Libros::where('titulo', 'LIKE', '%' . $query . '%')
                ->orderBy('titulo', 'asc')
                ->get();

                return view('home', ['libros' => $libros, 'search' => $query]);
        }

        // $libros = Libros::all();
        // return view('home', compact("libros"));
    }
}
