<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currency';

    protected $fillable = [
        'title',
        'short_name',
        'logo_url',
        'price'
    ];
}
