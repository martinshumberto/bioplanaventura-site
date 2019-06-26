<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Eventoscategorias;

class EventosCategoriasController extends Controller
{
    /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Request $request)
     {
         $eventoscategorias = Eventoscategorias::orderBy("eventoscategorias_id", "DESC");
 
         if($request->input('search'))
         {
            $eventoscategorias->where('title', 'like', '%'.$request->input('search').'%');
         }
 
         return view("backend/eventoscategorias/index", array(
             "eventoscategorias" => $eventoscategorias->paginate(50)
         ));
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view("backend/eventoscategorias/show");
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

            if($request->hasFile('file-send')) {

                $file = $request->file('file-send');
                $input['imagename'] = md5(time()).'.'.$file->getClientOriginalExtension();
                $name_img = md5(time()).'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('storage/files/');
                $file->move($destinationPath, $input['imagename']);
                $request->merge(array(
                    'file' =>  $name_img,
                ));
            }

             $request->merge(array('slug'=>str_slug($request->title, '-')));
             $eventoscategorias = Eventoscategorias::create($request->all());
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
             return redirect(route('backend-eventoscategorias', $eventoscategorias->eventoscategorias_id)); 
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
             return redirect(route('backend-eventoscategorias'));
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
         $eventoscategorias = Eventoscategorias::find($id);
 
         if (empty($eventoscategorias)) {
             abort(404);
         }
 
         return view("backend/eventoscategorias/show", array(
             "eventoscategorias" => $eventoscategorias
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
             Eventoscategorias::find($id)->update($request->except("image"));
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
         }
 
         return redirect(route('backend-eventoscategorias'));
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
             $eventoscategorias = Eventoscategorias::find($id);
 
 
             if(empty($eventoscategorias)) {
                 abort(404);
             }
 
             $eventoscategorias->delete();
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Slide deletado com sucesso !'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
         }
 
         return redirect(route('backend-eventoscategorias'));
     }
 }