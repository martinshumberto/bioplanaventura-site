<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;
/*
use Illuminate\Support\Facades\DB;
*/

class AjaxController extends Controller
{

	public function installments(Request $request)
    {
        $data = Input::all();

        //dd($data);

        $options = array(
            "client_id" => "Client_Id_5347bf76687615d65fd5ed66396609e6b8fd30a2",
            "client_secret" => "Client_Secret_b3d7470dc810873ed3139e301c1476e98a3e76eb",
            "sandbox" => true,
            "debug" => false
        );
        
        $params = [
          'total' => str_replace(['.',','], "", number_format(session('carrinho')['valor'], 2)),
          'brand' => $data['brand']
        ];

        try {
            $api = new Gerencianet($options);
            $installments = $api->getInstallments($params, []);
            print_r(json_encode($installments));
        } catch (GerencianetException $e) {
            print_r($e->code);
            print_r($e->error);
            print_r($e->errorDescription);
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }

}