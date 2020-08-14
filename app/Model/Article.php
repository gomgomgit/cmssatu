<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'user_id', 'category_id', 'content',
    ];
    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}
