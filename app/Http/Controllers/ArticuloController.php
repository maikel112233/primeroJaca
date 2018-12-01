<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;

class ArticuloController extends Controller
{
    public function index(Request $request)
    {

        //if (!$request->ajax()) return redirect('/');
 
        $buscar = $request->buscar;
        $criterio = $request->criterio;
         
        if ($buscar==''){
            $articulos =Articulo::orderBy('id', 'desc')->paginate(3);
        }
        else{
            $articulos =Articulo::where($criterio, 'like', '%'. $buscar . '%')->orderBy('id', 'desc')->paginate(3);
        }
         
 
        return [            
            'pagination' => [
            'total'        => $articulos->total(),
            'current_page' => $articulos->currentPage(),
            'per_page'     => $articulos->perPage(),
            'last_page'    => $articulos->lastPage(),
            'from'         => $articulos->firstItem(),
            'to'           => $articulos->lastItem(),
        ],

            'artuculos' => $articulos
        ];
    }
}
