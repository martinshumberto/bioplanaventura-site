<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Configuracoes extends Model
{
    protected $table       = "configuracoes";
    protected $primaryKey  = 'site_id';
    protected $fillable  = ['title', 'intro', 'endereco', 'email', 'telefone', 'telefone2', 'facebook', 'instagram', 'twitter', 'youtube', 'created_at', 'updated_at'];
}
