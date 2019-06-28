<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Model\Blogcategorias;

class BlogcategoriasController extends Controller
{
    /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Request $request)
     {
         $blogcategorias = Blogcategorias::orderBy("blogcategorias_id", "DESC");
 
         if($request->input('search'))
         {
            $blogcategorias->where('title', 'like', '%'.$request->input('search').'%');
         }
 
         return view("backend/blogcategorias/index", array(
             "blogcategorias" => $blogcategorias->paginate(50)
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
         return view("backend/blogcategorias/show", array("chave"=>str_random(32)));
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         try { 


             $request->merge(array('slug'=>str_slug($request->title, '-')));
             $blogcategorias = Blogcategorias::create($request->all());
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
             return redirect(route('backend-blogcategorias', $blogcategorias->blogcategorias_id)); 
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
             return redirect(route('backend-blogcategorias'));
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
         $blogcategorias = Blogcategorias::find($id);
 
         if (empty($blogcategorias)) {
             abort(404);
         }
 
         return view("backend/blogcategorias/show", array(
             "blogcategorias" => $blogcategorias, "chave"=> $blogcategorias->chave
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
 
         try {
            $request->merge(array('slug'=>str_slug($request->title, '-')));
             Blogcategorias::find($id)->update($request->except("image"));
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
         }
 
         return redirect(route('backend-blogcategorias'));
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
             $blogcategorias = Blogcategorias::find($id);
 
 
             if(empty($blogcategorias)) {
                 abort(404);
             }
 
             $blogcategorias->delete();
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Slide deletado com sucesso !'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
         }
 
         return redirect(route('backend-blogcategorias'));
     }
 }