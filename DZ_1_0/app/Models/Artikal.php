<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikal extends Model
{
    protected $table = 'artikli';
    protected $fillable = ['naziv', 'cijena', 'x', 'y', 'prodavnica_id'];

    public function prodavnica()
    {
        return $this->belongsTo(Prodavnica::class);
    }
}
