<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
    protected $table       = "abouts";
    protected $primaryKey  = 'abouts_id';
    protected $fillable  = ['title', 'subtitle', 'text', 'status', 'created_at', 'updated_at'];
}
