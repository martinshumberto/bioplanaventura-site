<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Mail\SendMailable;
use App\Model\Eventos;
use App\Model\Users;
use App\Model\Carrinho;
use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;


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
        $data['remember_token'] = str_random(32);
        $eventos                = Users::create($data);
        $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
        
        Mail::to($data['email'])
        ->cc('toni@garagee.com.br')
        ->send(new SendMailable($data['name'], $data['remember_token'])
        );
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
        return view("frontend/my-account/account/faturamento", array());
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

    public function editarperfil(Request $request){ 
            $data = Input::all();     


			if($request->hasFile('file-send')) {

                $file = $request->file('file-send');
                $input['imagename'] = md5(time()).'.'.$file->getClientOriginalExtension();
                $name_img = md5(time()).'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('storage/files/');
                $file->move($destinationPath, $input['imagename']);
                $data['team'] = $name_img;
			}

            try {
                Users::find($data['users_id'])->update($data);
                $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
            } catch (Exception $e) {
                $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
            }

            $dados = DB::table('users')
            ->where([
                ['users_id', '=', $data['users_id']]
            ])
            ->get();  

            $request->session()->forget('usuario');
            $request->session()->put('usuario', $dados[0]);

            return redirect(route('frontend-my-account'));
            
    }

    public function impressao($id){
        $options = array(            
            "client_id" => "Client_Id_b9fdd1c7646a2fbc54b1dd14d04f62073a236ae2",
            "client_secret" => "Client_Secret_cd9bae6f08dc8dcf82cb7c19f54e187b2b7a4eb8",
            "sandbox" => true,
            "debug" => false
    );

        $params = ['id' => $id];

            $body = [
            'billet_discount' => 1,
            'card_discount' => 1,
            'message' => '',
            'expire_at' => '2019-12-12',
            'request_delivery_address' => false,
            'payment_method' => 'all'
            ];

            try {
            $api = new Gerencianet($options);
            $response = $api->chargeLink($params, $body);

            //print_r($response);

            return new RedirectResponse($response['data']['payment_url']);
            } catch (GerencianetException $e) {
            print_r($e->code);
            print_r($e->error);
            print_r($e->errorDescription);
            } catch (Exception $e) {
            print_r($e->getMessage());
            }
    }

    public function checkout(){ 
        $dadosEvento = DB::table('eventos')
        ->where('eventos_id', '=', session('carrinho')['eventos_id'])
        ->get();
        
        $options = array(            
                "client_id" => "Client_Id_b9fdd1c7646a2fbc54b1dd14d04f62073a236ae2",
                "client_secret" => "Client_Secret_cd9bae6f08dc8dcf82cb7c19f54e187b2b7a4eb8",
                "sandbox" => true,
                "debug" => false
              
        );
         
        $items = [
            [
              'name' => $dadosEvento[0] -> title,
              'amount' => (int)session('carrinho')['quantidade_inteira'],
              'value' => (int)str_replace('.', '', session('carrinho')['valor'])
            ] 
          ];
          /*
        $customer = [
            'name' => session('usuario') -> name,
            'cpf' => session('usuario') -> cpf,
            'phone_number' => session('usuario') -> cellphone
        ];
        */
        $body = [
          'items' => $items
        ];        
      
        return view("frontend/my-account/account/checkout", array('dadosuser' => session('usuario'), 'dados_evento' =>  $dadosEvento[0]));

        /*
        try {
            $api = new Gerencianet($options);
            $charge = $api->createCharge([], $body);
            //print_r($charge);echo '<br>';
            
            //return redirect(route('frontend-my-account-billing',$charge['data']['charge_id']));
            
       
        } catch (GerencianetException $e) {
            echo('<Br>ERROS ------------<Br><Br>');
            print_r($e->code); echo '<br>';
            print_r($e->error);echo '<br>';
            print_r($e->errorDescription);echo '<br>';
        } catch (Exception $e) {
            echo('<Br>MENSAGEM ------------<Br><Br>');
            print_r($e->getMessage());echo '<br>';
        }
*/
    }

    public function confirmapagamento(Request $request){
        //DADOS CADASTRO BD CARRINHO 
        $data = Input::all();  
        $data['eventos_id']         = session('carrinho')['eventos_id'];
        $data['quantidade_inteira'] = session('carrinho')['quantidade_inteira'];
        $data['quantidade_meia']    = 0;
        $data['users_id']           = session('usuario')->users_id;
        $data['valor']              = session('carrinho')['valor'];
        $data['token']              = str_random(20);
        $data['status']             = 0; 

        // DADOS DO EVENTO
        $dadosEvento = DB::table('eventos')
        ->where('eventos_id', '=', session('carrinho')['eventos_id'])
        ->get();  
         
        // CONVERSÕES PARA O GETWHAI
        $valor_conversao_1 = str_replace('.', '', session('carrinho')['valor']);
        $valor_conversao_2 = str_pad($valor_conversao_1, 6, '0');
        $itens = [
            [
              'name' => $dadosEvento[0] -> title,
              'amount' => (int)session('carrinho')['quantidade_inteira'],
              'value' => (int)$valor_conversao_2
            ] 
          ];
          $body = [
            'items' => $itens
          ]; 

          $options = array(            
            "client_id" => "Client_Id_b9fdd1c7646a2fbc54b1dd14d04f62073a236ae2",
            "client_secret" => "Client_Secret_cd9bae6f08dc8dcf82cb7c19f54e187b2b7a4eb8",
            "sandbox" => true,
            "debug" => false
          );  

          try {
                $api = new Gerencianet($options);
                $charge = $api->createCharge([], $body);
                 
            } catch (GerencianetException $e) {
                echo('<Br>ERROS ------------<Br><Br>');
                print_r($e->code); echo '<br>';
                print_r($e->error);echo '<br>';
                print_r($e->errorDescription);echo '<br>';
            } catch (Exception $e) {
                echo('<Br>MENSAGEM ------------<Br><Br>');
                print_r($e->getMessage());echo '<br>';
            }

       if (!$data['name-on-card']):

            $params = ['id' => $charge['data']['charge_id']];

            $customer = [
                'name' => session('usuario')->name,
                'cpf' => session('usuario')->cpf,
                'phone_number' => session('usuario')->cellphone
            ];

            $body = [
            'payment' => [
                'banking_billet' => [
                'expire_at' => '2019-12-12',
                'customer' => $customer
                ]
            ]
            ];
            Carrinho::create($data);
            $request->session()->forget('carrinho');

            $semCartao = $api->payCharge($params, $body);
            print_r($semCartao);

       else:
        echo "com cartão ";
       endif;


      
    }

    public function historico(){
        $carrinho = DB::table('carrinho')  
        ->get(); 
        
        return view("frontend/my-account/account/historico", array('carrinho'=>$carrinho));    
    }
}
