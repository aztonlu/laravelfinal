<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'prices';
    protected $fillable = [
        'id',
        'date',
        'price'
    ];

    public function Payment(){
        return $this->hasOne('App\Models\Payment');
    }
}
