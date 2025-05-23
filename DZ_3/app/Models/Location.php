<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'Location';
    protected $primaryKey = 'LocationID'; // ✅ your actual primary key
    public $incrementing = false;         // ✅ important
    protected $keyType = 'int';           // ✅ important
    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'LocationID'; // ✅ enables proper route model binding
    }

    protected $fillable = [
        'LocationID',
        'Name',
        'CostRate',
        'Availability',
        'ModifiedDate'
    ];
}
