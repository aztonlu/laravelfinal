<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'skype',
        'nationality',
        'checkin',
        'checkout',
        'adults',
        'children',
        'hotel',
        'guide',
        'message'
    ];

    public function tour(){
        return $this->belongsTo('App\Models\Price');
    }
}
