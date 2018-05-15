<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'subcategories';

    protected $fillable = [
        'name',
        'category_id'
    ];

    protected function category(){
        return $this->belongsTo('App\Models\Category');
    }

    protected function tours(){
        return $this->belongsToMany('App\Models\Tour')->withTimestamps();;
    }
}
