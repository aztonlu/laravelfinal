<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourGallery extends Model
{
    protected $table = 'tourgalleries';

    protected $fillable = [
        'name',
        'description'
    ];

    protected function tour(){
        return $this->belongsTo('App\Models\Tour');
    }
}
