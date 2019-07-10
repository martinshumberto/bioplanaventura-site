<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Model\Users;

class AccountController extends FrontendController
{
   
    public function login(){

    }


    public function registro(Request $request){


        $data = Input::all();  
       
        $data['birthday']  = Carbon::parse(strtotime($data['birthday']))->format('Y-m-d');
        $data['boss']      = 1;
        $data['class']     = 'user';
        $data['states_id']  = 1;
        $data['countries_id'] = 1;
        $data['username']  = $data['email'];
        $data['image']     = 'noimage';
        $data['status']    = 3;
        $eventos = Users::create($data);
        $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
  
    }
}
