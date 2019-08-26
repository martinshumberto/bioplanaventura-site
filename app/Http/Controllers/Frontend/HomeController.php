<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use App\Model\Slider;
use App\Model\Eventos;
use App\Model\Blog;
use App\Model\Informativo;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends FrontendController
{
   public function index()
   {
      $promocoes = DB::table('eventos')
      ->where('promocao', '=', 'promocao')
      ->limit(5)
      ->get();

      $slider = DB::table('slider')
      ->inRandomOrder()
      ->limit(5)
      ->get();

      $blog = DB::table('blog')
      ->inRandomOrder()
      ->limit(5)
      ->get();

         return view("frontend/home/index", array("blog"=>$blog, "slides" => $slider, "promocao" => $promocoes));
   }

   public function assine(Request $request){
            $informativo = Informativo::create($request->all());
            return redirect(route('frontend-home'));
            $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Seu e-mail foi cadastrado com sucesso !'));
           
     }

   public function pesquisa(Request $request){ 

      $categorias = DB::table('eventoscategorias')->get();

      $eventos = DB::table('eventos')
      ->where('title', 'like', '%'.$request->termo.'%')
      ->get();

      $blogs = DB::table('blog')
      ->where([
         ['title', 'like', '%'.$request->termo.'%'],
         ['tags', 'like', '%'.$request->termo.'%']
         ])
      ->get();

   		return view("frontend/home/pesquisa", array("eventos"=>$eventos, "categorias"=>$categorias, "blogs"=>$blogs));
    
    }

public function mail()
{
   $name = 'Toni';
   Mail::to('toniagne@gmail.com')->send(new SendMailable($name));
   
   return 'Email was sent';
}
}
