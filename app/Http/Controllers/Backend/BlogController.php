<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Model\Blog;
use App\Model\Fotos;
use File;


class BlogController extends Controller
{
    /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Request $request)
     {

         $blog = Blog::orderBy("blog_id", "DESC");
 
         if($request->input('search'))
         {
            $blog->where('title', 'like', '%'.$request->input('search').'%');
         }
 
         return view("backend/blog/index", array(
             "blog" => $blog->paginate(50)
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
         return view("backend/blog/show", array("chave"=>str_random(32)), array("fotos"=>$fotos));
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
             $blog = Blog::create($data);
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
             return redirect(route('backend-blog'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
             return redirect(route('backend-blog'));
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
         $blog = Blog::find($id);
         $blog->datavendas       = Carbon::parse($blog->datavendas)->format('d/m/Y');
         $blog->dataevento       = Carbon::parse($blog->dataevento)->format('d/m/Y'); 
         $blog->ingressomeia     = number_format($blog->ingressomeia, 2);
         $blog->ingressointeiro  = number_format($blog->ingressointeiro, 2);

         $fotos = DB::table('fotos')->where('chave', $blog->chave)->get();

          
         return view("backend/blog/show", array(
             "blog" => $blog, 
             "chave" => $blog->chave,
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
        $data['ingressomeia']    = $this->tofloat($data['ingressomeia']);
        $data['ingressointeiro'] = $this->tofloat($data['ingressointeiro']); 
        $data['slug']            = str_slug($data['title'], '-');
 
         try {
            
             Blog::find($id)->update($data);
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
         }
 
         return redirect(route('backend-blog'));
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
             $blog = Blog::find($id);
 
 
             if(empty($blog)) {
                 abort(404);
             }
 
             $blog->delete();
             $request->session()->flash('alert', array('code'=> 'success', 'text'  => '<b>Evento</b> deletado com sucesso !'));
         } catch (Exception $e) {
             $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
         }
 
         return redirect(route('backend-blog'));
     }
 }