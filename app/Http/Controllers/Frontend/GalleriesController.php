<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;

use Illuminate\Http\Request;

use App\Http\Requests;

class GalleriesController extends FrontendController
{
   public function index()
   {
   		return view("frontend/galleries/index");
   }
}
