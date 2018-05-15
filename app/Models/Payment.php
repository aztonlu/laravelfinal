<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = [
        'paypal',
        'safetypay'
    ];
    
    public function price(){
        return $this->belongsTo('App\Models\Price');
    }
    
}
