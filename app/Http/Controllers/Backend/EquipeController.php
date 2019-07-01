<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Model\Equipe;
use App\Model\Fotos;
use File;


class EquipeController extends Controller
{
    /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Request $request)
     {
         $equipe = Equipe::orderBy("equipe_id", "DESC");
 
         if($request->input('search'))
         {
            $equipe->where('title', 'like', '%'.$request->input('search').'%');
         }
 
         return view("backend/equipe/index", array(
             "equipe" => $equipe->paginate(50)
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
         return view("backend/equipe/show", array("chave"=>str_random(32)), array("fotos"=>$fotos));
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
        

         try { 
             $equipe = Equipe::create($data);
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
             return redirect(route('backend-equipe'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
             return redirect(route('backend-equipe'));
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
         $equipe = Equipe::find($id);
         $fotos = DB::table('fotos')->where('chave', $equipe->chave)->get();

          
         return view("backend/equipe/show", array(
             "equipe" => $equipe, 
             "chave" => $equipe->chave,
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
        $data['slug']            = str_slug($data['title'], '-');
 
         try {
            
             Equipe::find($id)->update($data);
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
         }
 
         return redirect(route('backend-equipe'));
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
             $equipe = Equipe::find($id);
 
 
             if(empty($equipe)) {
                 abort(404);
             }
 
             $equipe->delete();
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => '<b>Evento</b> deletado com sucesso !'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
         }
 
         return redirect(route('backend-equipe'));
     }
 }