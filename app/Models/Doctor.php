<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'image',
        'name',
        'specialist',
        'title',
        'description',
    ];
}
