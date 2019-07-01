<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Model\Equipe;
use App\Http\Requests;

class EquipeController extends FrontendController
{
   public function index()
   {

      $equipe = DB::table('equipe')
      ->get();
         return view("frontend/home/equipe", array('equipes'=>$equipe));
         

   }
}
