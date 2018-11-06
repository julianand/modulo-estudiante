<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $table = 'usuarios';
    protected $fillable = ['username', 'password'];
    protected $hidden = ['remember_token', 'password'];
}
