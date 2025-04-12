<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Product';
    protected $primaryKey = 'ProductID';
    public $timestamps = false;

    protected $fillable = [
        'Name',
        'ProductNumber',
        'MakeFlag',
        'FinishedGoodsFlag',
        'Color',
        'SafetyStockLevel',
        'ReorderPoint',
        'StandardCost',
        'ListPrice',
        'Size',
        'SizeUnitMeasureCode',
        'WeightUnitMeasureCode',
        'Weight',
        'DaysToManufacture',
        'ProductLine',
        'Class',
        'Style',
        'ProductSubcategoryID',
        'ProductModelID',
        'SellStartDate',
        'SellEndDate',
        'DiscontinuedDate',
        'rowguid',
        'ModifiedDate'
    ];
}
