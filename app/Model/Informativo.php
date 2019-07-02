<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Informativo extends Model
{
    protected $table       = "informativo";
    protected $primaryKey  = 'informativo_id';
    protected $fillable  = ['email', 'created_at', 'updated_at'];
}
