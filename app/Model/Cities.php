<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table      = "cities";
	protected $primaryKey = 'cities_id';
	protected $fillable   = ['name', 'status', 'states_id', 'cd_ibge', 'created_at', 'updated_at'];

}
