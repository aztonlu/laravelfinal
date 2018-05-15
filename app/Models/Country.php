<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = [
        'name'
    ];

    public function tours(){
        return $this->belongsToMany('App\Models\Tour')->withTimestamps();;
    }
}
