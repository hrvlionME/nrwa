<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';
    protected $primaryKey = 'LocationID';
    public $timestamps = false;

    protected $fillable = [
        'Name',
        'CostRate',
        'Availability',
        'ModifiedDate'
    ];
}
