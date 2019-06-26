<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    protected $table      = "fotos";
	protected $primaryKey = 'foto_id';
	protected $fillable   = ['file', 'action', 'chave', 'created_at', 'updated_at'];

}
