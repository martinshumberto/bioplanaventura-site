<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Model\Slider;
use App\Model\Eventos;
use App\Model\Informativo;

use Illuminate\Http\Request;

use App\Http\Requests;

class CalendarioController extends FrontendController
{
   public function index()
   {


      $eventos = DB::table('eventos')->where('status', 1)->get();
  return view("frontend/calendario/index", array("eventos" => $eventos));
   }

}
