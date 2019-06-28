<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table      = "blog";
	protected $primaryKey = 'blog_id';
	protected $fillable   = ['title', 'subtitle', 'descricao', 'video', 'blogcategorias_id', 'users_id', 'tags', 'slug', 'status', 'chave', 'created_at', 'updated_at'];

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
