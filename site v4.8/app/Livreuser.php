<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livreuser extends Model
{
    protected $fillable = [
        'name',
        'code',
        'author',
        'dated',
        'kind'
    ];
}
