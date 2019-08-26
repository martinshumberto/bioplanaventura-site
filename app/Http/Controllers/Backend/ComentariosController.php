<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Model\Comentarios;
use App\Model\Fotos;
use File;


class ComentariosController extends Controller
{
    /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Request $request)
     {

         $comentarios = Comentarios::orderBy("comentarios_id", "DESC");
 
         if($request->input('search'))
         {
            $comentarios->where('title', 'like', '%'.$request->input('search').'%');
         }
 
         return view("backend/comentarios/index", array(
             "comentarios" => $comentarios->paginate(50)
         ));
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
        $fotos = DB::table('fotos')->where('chave', str_random(32))->get();
         return view("backend/comentarios/show", array("chave"=>str_random(32)), array("fotos"=>$fotos));
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */

      public function tofloat($num) {
        $var1 = str_replace('.', '', $num);
        $var2 = str_replace(',', '.', $var1);
        return floatval($var2);
    }

     public function store(Request $request)
     {         
        $data = Input::all();         
        $data['slug']            = str_slug($data['title'], '-');
        $data['users_id']        = Auth::id();
        

         try { 
             $comentarios = Comentarios::create($data);
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
             return redirect(route('backend-comentarios'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
             return redirect(route('backend-comentarios'));
         }   
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $comentarios = Comentarios::find($id);
         $fotos = DB::table('fotos')->where('chave', $comentarios->chave)->get();

          
         return view("backend/comentarios/show", array(
             "comentarios" => $comentarios, 
             "chave" => $comentarios->chave,
             "fotos" => $fotos
         ));
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
        $data = Input::all();  
    
         try {
            
             Comentarios::find($id)->update($data);
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
         }
 
         return redirect(route('backend-comentarios'));
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy(Request $request, $id)
     {
         try {
             $comentarios = Comentarios::find($id);
 
 
             if(empty($comentarios)) {
                 abort(404);
             }
 
             $comentarios->delete();
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => '<b>Evento</b> deletado com sucesso !'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
         }
 
         return redirect(route('backend-comentarios'));
     }
 }