<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Model\Eventos;
use App\Model\Fotos;
use File;


class eventosController extends Controller
{
    
     public function index(Request $request)
     {
         $eventos = Eventos::orderBy("eventos_id", "DESC"); 
         if($request->input('search'))         {
            $eventos->where('title', 'like', '%'.$request->input('search').'%');
         }
          return view("backend/eventos/index", array(
             "eventos" => $eventos->paginate(50)
         ));
     }
 
    
     public function pesquisa(Request $request){
        $data = Input::all();  

        dd($data);
     }

     public function create()
     {
        $fotos = DB::table('fotos')->where('chave', str_random(32))->get();
         return view("backend/eventos/show", array("chave"=>str_random(32)), array("fotos"=>$fotos));
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
        $data['datavendas']        
        = Carbon::parse(strtotime($data['datavendas']))->format('Y-m-d');
        $data['dataevento']      = Carbon::parse(strtotime($data['dataevento']))->format('Y-m-d');
        $data['datatermino']      = Carbon::parse(strtotime($data['datatermino']))->format('Y-m-d');
        $data['ingressomeia']    = $this->tofloat($data['ingressomeia']);
        $data['ingressointeiro'] = $this->tofloat($data['ingressointeiro']); 
        $data['slug']            = str_slug($data['title'], '-');
        

         try { 
             $eventos = Eventos::create($data);
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
             return redirect(route('backend-eventos'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
             return redirect(route('backend-eventos'));
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
         $eventos = Eventos::find($id);
         $eventos->datavendas       = Carbon::parse($eventos->datavendas)->format('d/m/Y');
         $eventos->dataevento       = Carbon::parse($eventos->dataevento)->format('d/m/Y'); 
         $eventos->datatermino      = Carbon::parse($eventos->datatermino)->format('d/m/Y');
         $eventos->ingressomeia     = number_format($eventos->ingressomeia, 2);
         $eventos->ingressointeiro  = number_format($eventos->ingressointeiro, 2);

         $fotos = DB::table('fotos')->where('chave', $eventos->chave)->get();

          
         return view("backend/eventos/show", array(
             "eventos" => $eventos, 
             "chave" => $eventos->chave,
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
        $data['datavendas']      = Carbon::parse(strtotime($data['datavendas']))->format('Y-m-d');
        $data['dataevento']      = Carbon::parse(strtotime($data['dataevento']))->format('Y-m-d');
        $data['datatermino']     = Carbon::parse(strtotime($data['datatermino']))->format('Y-m-d');
        $data['ingressomeia']    = $this->tofloat($data['ingressomeia']);
        $data['ingressointeiro'] = $this->tofloat($data['ingressointeiro']); 
        $data['slug']            = str_slug($data['title'], '-');
 
         try {
            
             Eventos::find($id)->update($data);
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
         }
 
         return redirect(route('backend-eventos'));
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
             $eventos = Eventos::find($id);
 
 
             if(empty($eventos)) {
                 abort(404);
             }
 
             $eventos->delete();
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => '<b>Evento</b> deletado com sucesso !'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
         }
 
         return redirect(route('backend-eventos'));
     }
 }