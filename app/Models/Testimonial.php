<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';

    protected $fillable = [
        'name',
        'email',
        'date',
        'nationality',
        'testimonial',
        'photo',
        'status',
        'tour_id',
        'language',
        'created_at',
        'updated_at'
    ];

    protected function tour(){
        return $this->belongsTo('App\Models\Tour');
    }
}
