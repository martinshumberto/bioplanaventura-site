<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $table       = "comentarios";
    protected $primaryKey  = 'comentarios_id';
    protected $fillable  = ['users_id', 'evento_id', 'star-rating', 'author', 'email',  'comment', 'status', 'created_at', 'updated_at'];
}
