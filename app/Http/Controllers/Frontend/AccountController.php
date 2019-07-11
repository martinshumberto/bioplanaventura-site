<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Model\Eventos;
use App\Model\Users;

class AccountController extends FrontendController
{
   
    public function login(Request $request){
        $dados = DB::table('users')
        ->where([
            ['email', '=', $request->email], 
            ['password', '=', $request->password]
        ])
        ->get();  

        if ($dados->isEmpty()):
            $request->session()->flash('alert', array('code'=> 'error', 'text'  => 'Nome ou senha estão incorretos, tente novamente.'));
            return redirect(route('frontend-home'));
        else:
            $id = $dados[0]->users_id;
            $data = [
                'users_id' => $id,
                'status'    => 2
            ]; 
            $request->session()->put('usuario', $dados[0]);
           return redirect(route('frontend-my-account'));
        endif;
    }


    public function registro(Request $request){
        $data = Input::all();         
        $data['birthday']       = Carbon::parse(strtotime($data['birthday']))->format('Y-m-d');
        $data['boss']           = 1;
        $data['class']          = 'user';
        $data['states_id']      = 1;
        $data['countries_id']   = 1;
        $data['username']       = $data['email'];
        $data['image']          = 'noimage';
        $data['status']         = 3;
        $data['remember_token'] = '8LhHNF9yLlgrWVAZeO0EvKVSSHt3kcKP';
        $eventos                = Users::create($data);
        $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
        return view("frontend/home/confirma", array('nome' => $data['name'], 'email'=>$data['email']));
    }

    public function confirma(Request $request, $token){
        $dados = DB::table('users')
        ->where('remember_token', '=', $token)
        ->get();
        $id = $dados[0]->users_id;
        $data = [
            'users_id' => $id,
            'status'    => 2
        ];
        Users::find($id)->update($data);
        $request->session()->put('usuario', $dados[0]);
        return view("frontend/home/perfil", array('dadosuser' => $dados[0]));
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect(route('frontend-home'));
    }

    public function perfil(Request $request){  
        return view("frontend/my-account/account/index", array('dadosuser' => session('usuario')));
    }

    public function faturamento(Request $request){  
        return view("frontend/home/faturamento", array());
    }

    public function checkin(Request $request){ 

        $dados = DB::table('eventos')
        ->where([
            ['eventos_id', '=', $request -> eventos_id]
        ])
        ->get(); 

        $calculo_inteira    = $dados[0]->ingressointeiro * $request -> quantidade_inteira;
        $calculo_meia       = $dados[0]->ingressomeia * $request -> quantidade_meia;

        $dadosCarrinho = array(
             'users_id'             => session('usuario') -> users_id,
             'eventos_id'           => $request -> eventos_id,
             'quantidade_inteira'   => $request -> quantidade_inteira,
             'quantidade_meia'      => $request -> quantidade_meia,
             'valor_inteira'        => $dados[0]->ingressointeiro,
             'valor_meia'           => $dados[0]->ingressomeia,
             'status'               => 3,
             'valor'                => $calculo_inteira + $calculo_meia,
             'token'                => session('usuario') -> remember_token, 
             'data'                 => date('y-m-d H:m')
         );
         $request->session()->put('carrinho', $dadosCarrinho);
        return view("frontend/home/checkin", array('dados_carrinho'=>$dadosCarrinho, 'dados_evento'=>$dados[0]));
    }
}
