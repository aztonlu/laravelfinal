<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';

    protected $fillable = [
        'code',
        'titleseo',
        'descriptionseo',
        'keywordseo',
        'title',
        'state',
        'days',
        'price',
        'peoples',
        'offer',
        'summary',
        'itinerarie',
        'include',
        'organization',
        'map',
        'coverpage',
        'pdf',
        'user_id',
        'language'
    ];

    protected function user(){
        return $this->belongsTo('App\Models\User');
    }

    protected function countries(){
        return $this->belongsToMany('App\Models\Country');
    }

    protected function subcategories(){
        return $this->belongsToMany('App\Models\SubCategory');
    }

    protected function prices(){
        return $this->hasMany('App\Models\Price');
    }

    protected function testimonials(){
        return $this->hasMany('App\Models\Testimonial');
    }

    protected function reservations(){
        return $this->hasMany('App\Models\Reservation');
    }

    protected function tourgalleries(){
        return $this->hasMany('App\Models\TourGallery');
    }

    protected function locations(){
        return $this->hasMany('App\Models\Location');
    }

}
