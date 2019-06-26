<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\DB;
use App\Model\Slider;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends FrontendController
{
   public function index()
   {
      $slider = DB::table('slider')
      ->inRandomOrder()
      ->limit(1)
      ->get();
   		return view("frontend/home/index", array( "slides" => $slider));
   }
}
