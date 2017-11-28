<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sideright extends Model
{
    protected $fillable = [
        'author',
        'filter',
        'time_create',
        'content_main',
        'content_text',
        'content'
    ];
}
