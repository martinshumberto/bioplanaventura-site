<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Blogcategorias extends Model
{
    protected $table      = "blogcategorias";
	protected $primaryKey = 'blogcategorias_id';
	protected $fillable   = ['title', 'subtitle', 'slug', 'status', 'chave', 'created_at', 'updated_at'];

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
