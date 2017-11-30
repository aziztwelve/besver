<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $fillable = [
        'author',
        'filter',
        'image',
        'time_create',
        'content_main',
        'content_text',
        'content'
    ];


    public function filters()
    {
        return $this->hasMany('App\Filter');

    }
}
