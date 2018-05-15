<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'user_id',
        'date',
        'title',
        'description',
        'image',
        'created_at',
        'updated_at',
        'blog_id'
    ];

    protected function user(){
        return $this->belongsTo('App\Models\User');
    }
}
