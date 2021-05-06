<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable=[
        'year','title','description','sort_order'
    ];
}
