<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    protected $table = 'ProductPhoto';
    public $timestamps = false;

    protected $fillable = [
        'url',
        'description',
    ];
}
