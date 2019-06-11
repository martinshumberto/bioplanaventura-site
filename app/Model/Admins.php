<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admins extends Authenticatable
{
    use Notifiable;

    protected $table      = "admins";
	protected $primaryKey = 'admins_id';
	protected $fillable   = ['boss', 'class', 'name', 'username', 'image', 'email', 'password', 'status', 'remember_token', 'created_at', 'updated_at'];

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

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }


    public function status()
    {
        switch ($this->status) {
            case '1':
                return 'Ativo';
            break;
            case '2':
                return 'Inativo';
            break;
        }
    }
    public function boss()
    {
        switch ($this->boss) {
            case '1':
                return 'Administrador Sistema';
            break;
            case '2':
                return 'Administrador';
            break;
            case '3':
                return 'Moderador';
            break;
        }
    }

}
