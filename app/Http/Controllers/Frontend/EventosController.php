<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Eventos;

class EventosController extends Controller
{
    public function show($id)
    {
        $eventos = Eventos::find($id);

    }

    public function pesquisa(Request $request){
        $data = Input::all();  

        dd($data);
     }
}
