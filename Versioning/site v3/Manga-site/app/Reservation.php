<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $fillable = [
        'name',
        'code',
        'author',
        'dated',
        'kind'
    ];
}
