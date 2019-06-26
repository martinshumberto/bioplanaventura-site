<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table      = "eventos";
	protected $primaryKey = 'eventos_id';
	protected $fillable   = ['eventoscategorias_id', 'title', 'subtitle', 'descricao', 'video',  'outrasinfos', 'promocao', 'dataevento', 'datavendas', 'ingressomeia', 'ingressointeiro', 'chave', 'status', 'created_at', 'updated_at', 'slug', 'estado_id', 'city_id', 'dificuldade'];

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
