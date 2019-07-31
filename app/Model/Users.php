<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;
    protected $table       = "users";
    protected $primaryKey  = 'users_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'last_name',
        'email', 
        'password', 
        'sexes_id', 
        'cpf', 
        'cities_id', 
        'states_id', 
        'countries_id', 
        'birthday', 
        'team', 
        'zip_code', 
        'address',
        'number',
        'address_complement',
        'district',
        'cellphone',
        'cellphone_emergency',
        'status', 
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
