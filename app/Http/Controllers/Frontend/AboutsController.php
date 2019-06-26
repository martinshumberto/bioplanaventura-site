<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\DB;
use App\Model\Abouts;

class AboutsController extends FrontendController
{
   public function index()
   {
      $abouts = DB::table('abouts')
      ->inRandomOrder()
      ->limit(1)
      ->get();

   		return view("frontend/abouts/index", array('quemsomos' => $abouts));
   }
}
