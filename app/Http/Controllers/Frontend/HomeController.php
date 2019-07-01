<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\DB;
use App\Model\Slider;
use App\Model\Eventos;

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
}
