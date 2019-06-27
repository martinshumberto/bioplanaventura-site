<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Http\Requests;

class EquipeController extends FrontendController
{
   public function index()
   {

      
         return view("frontend/home/equipe", array( ));
         

   }
}
