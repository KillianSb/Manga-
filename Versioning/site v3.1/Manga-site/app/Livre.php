<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable = [
        'name',
        'code',
        'author',
        'dated',
        'kind'
    ];
}
