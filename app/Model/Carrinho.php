<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $table      = "carrinho";
	protected $primaryKey = 'carrinho_id';
	protected $fillable   = ['eventos_id', 'users_id', 'quantidade_inteira', 'quantidade_meia', 'valor', 'token', 'status', 'chave', 'created_at', 'updated_at'];

    public function status() {

		switch ($this->status) {
			case '1':
				return "Ativo";
			break;
			case '2':
				return "Inativo";
			break;
		}
    }

    public function statusColor()
    {
        switch($this->status){
            case '1':
            return "color-green";
            break;
            case '2':
            return "color-red";
            break;
        }
    }

    public function statusIcon()
    {
        switch($this->status){
            case '1':
            return "mdi-check";
            break;
            case '2':
            return "mdi-close";
            break;
        }
    }
}
