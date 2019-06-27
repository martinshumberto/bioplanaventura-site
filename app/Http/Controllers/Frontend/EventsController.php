<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Model\Eventos;
use App\Model\Eventoscategorias;
use Illuminate\Support\Carbon;

class EventsController extends FrontendController
{
   public function index()
   {
   		return view("frontend/events/index");
   }

   public function show($id)
   {
       

       if ($id == "todos"):
        $categorias = $id;
        $eventos = DB::table('eventos')
        ->get();
       else:
        $categorias = DB::table('eventoscategorias')
       ->where('slug', '=', $id)
       ->get();

        $eventos = DB::table('eventos')
        ->where('eventoscategorias_id', '=', $categorias[0]->eventoscategorias_id)
        ->get();
       endif;

       return view("frontend/eventos/todos", array('eventos' => $eventos, 'categorias' => $categorias));
   }

   public function evento($id)
   {
        $eventosTodos = DB::table('eventos')
        ->limit(5)
        ->get();

       $eventos = DB::table('eventos')
       ->where('slug', '=', $id)
       ->get();

       $categorias = DB::table('eventoscategorias')
       ->where('eventoscategorias_id', '=', $eventos[0]->eventoscategorias_id)
       ->get();

       return view("frontend/eventos/ver-evento", array('evento' => $eventos, 'eventosTodos'=>$eventosTodos, 'categorias' => $categorias));
   }
}
