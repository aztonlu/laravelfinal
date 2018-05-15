<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'icon'
    ];

    protected function subcategories(){
        return $this->hasMany('App\Models\SubCategory');
    }
}
