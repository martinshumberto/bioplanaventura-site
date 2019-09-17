<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
	protected $table      = "states";
	protected $primaryKey = 'states_id';
	protected $fillable   = ['name', 'initials', 'status', 'countries_id', 'cd_ibge', 'created_at', 'updated_at'];

}
