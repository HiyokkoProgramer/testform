<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'group',
        'username',
        'age',
        'tel',
        'mail',
        'opinion',
    ];
}
