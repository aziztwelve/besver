<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\MainNotPhoto
 *
 * @property int $id
 * @property string|null $filter_id
 * @property string|null $time_create
 * @property string|null $content_main
 * @property string|null $content
 * @property string|null $content_text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MainNotPhoto whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MainNotPhoto whereContentMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MainNotPhoto whereContentText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MainNotPhoto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MainNotPhoto whereFilterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MainNotPhoto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MainNotPhoto whereTimeCreate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MainNotPhoto whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MainNotPhoto extends Model
{
    //

    // protected $fillable  = array('id', 'author', 'filter', 'time_create', 'content_min', 'content', 'content_text');
}
