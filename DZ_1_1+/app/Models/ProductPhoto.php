<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    use HasFactory;

    protected $table = 'productphoto';
    protected $primaryKey = 'ProductPhotoID';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'url',
        'description',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
