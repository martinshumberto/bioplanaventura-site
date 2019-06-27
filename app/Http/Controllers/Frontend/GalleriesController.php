<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Gallery;

use App\Http\Requests;

class GalleriesController extends FrontendController
{
   public function index()
   {

      $galerias = DB::table('gallery')
      ->where('status', '=', 1)
      ->get();

   		return view("frontend/galleries/index", array("galerias"=>$galerias));
   }
}
