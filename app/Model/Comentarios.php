<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $table       = "comentarios";
    protected $primaryKey  = 'comentarios_id';
    protected $fillable  = ['users_id', 'evento_id', 'star_rating', 'author', 'email',  'comment', 'status', 'created_at', 'updated_at'];

    public function status() {

		switch ($this->status) {
			case '1':
				return "Ativo";
			break;
			case '0':
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
            case '0':
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
            case '0':
            return "mdi-close";
            break;
        }
    }
}
