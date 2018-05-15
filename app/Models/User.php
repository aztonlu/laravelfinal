<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'language',
        'position',
        'profilepic',
        'facebook',
        'twitter',
        'linkedin'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tours(){
        return $this->hasMany('App\Models\Tours');
    }

    public function pages(){
        return $this->hasMany('App\Models\Pages');
    }

    public function articles(){
        return $this->hasMany('App\Models\Articles');
    }
}
