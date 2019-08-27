<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Model\Eventos;
use App\Model\Eventoscategorias;
use App\Model\Comentarios;
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

       $comentarios = DB::table('comentarios')
       ->where([
           ['status', '=', 1], 
           ['evento_id', '=', $eventos[0]->eventos_id]
       ])
       ->get();

       return view("frontend/eventos/ver-evento", array('evento' => $eventos, 'eventosTodos'=>$eventosTodos, 'categorias' => $categorias, 'comentarios'=>$comentarios));
   }

   public function pesquisa(Request $request){
    $data = Input::all();  

    $eventosTodos = DB::table('eventos')
    ->limit(5)
    ->get();

    $eventos = DB::table('eventos')
    ->where('dificuldade', '=', $data['dificuldade'])
    ->get();

    if(!$eventos->count() > 0):
        return view("frontend/eventos/vazio", array());
    else:
    $categorias = DB::table('eventoscategorias')
    ->where('eventoscategorias_id', '=', $eventos[0]->eventoscategorias_id)
    ->get();
    return view("frontend/eventos/todos", array('eventos' => $eventos, 'categorias' => $categorias));
    endif; 
 }

 public function comentarios(Request $request, $id)
 {
    $eventos = DB::table('eventos')
    ->where('slug', '=', $id)
    ->get();
 
      $data = Input::all();   
      $data['status'] = 0;
      $data['evento_id'] = (int)$eventos[0] -> eventos_id;     
      $cad_comentarios = Comentarios::create($data); 

     
    $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Seu comentário foi enviado para o nosso mediador.'));
    return redirect(route('frontend-evento-selecionado', $id));
 }
}
