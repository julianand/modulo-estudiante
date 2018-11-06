<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    public $timestamps = false;
    protected $table = 'usuarios';
    protected $fillable = ['username', 'password'];
    protected $hidden = ['remember_token', 'password'];

    public function setPasswordAttribute ($value) {
        $this->attributes['password'] = \Hash::make($value);
    }

    public function rol () {
    	return $this->belongsTo('App\Rol', 'rol_id');
    }
}
