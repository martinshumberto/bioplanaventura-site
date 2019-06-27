<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Model\Gallery;
use App\Model\Fotos;
use File;

class GaleriaController extends Controller
{
    public function index(Request $request)
    {
        $galeria = Gallery::orderBy("gallery_id", "DESC");
        if($request->input('search'))
        {
           $galeria->where('title', 'like', '%'.$request->input('search').'%');
        }
        return view("backend/galeria/index", array(
            "galerias" => $galeria->paginate(50)
        ));
    }

  
    public function create()
    {
       $fotos = DB::table('fotos')->where('chave', str_random(32))->get();
        return view("backend/galeria/show", array("chave"=>str_random(32)), array("fotos"=>$fotos));
    }

   

    public function store(Request $request)
    {         
       $data = Input::all();        

        try { 
            $galeria = Gallery::create($data);
            $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
            return redirect(route('backend-galeria'));
        } catch (Exception $e) {
            $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
            return redirect(route('backend-galeria'));
        }   
    }

    public function show($id)
    {
        $galeria        = Gallery::find($id);      
        $fotos          = DB::table('fotos')->where('chave', $galeria->chave)->get();
         
        return view("backend/galeria/show", array(
            "galeria"   => $galeria, 
            "chave"     => $galeria->chave,
            "fotos"     => $fotos
        ));
    }

    public function update(Request $request, $id)
    {  
       $data = Input::all();  
      
        try {
           
            Gallery::find($id)->update($data);
            $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
        } catch (Exception $e) {
            $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
        }

        return redirect(route('backend-galeria'));
    }

    public function destroy(Request $request, $id)
    {
        try {
            $galeria = Gallery::find($id);

            if(empty($galeria)) {
                abort(404);
            }

            $galeria->delete();
            $request->session()->flash('alert', array('code'=> 'success', 'text'  => '<b>Evento</b> deletado com sucesso !'));
        } catch (Exception $e) {
            $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
        }

        return redirect(route('backend-galeria'));
    }
}
