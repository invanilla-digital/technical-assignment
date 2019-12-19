<?php

namespace App\Domain\Products;

use Illuminate\Database\Eloquent\Model;


/**
 * @property int id
 */
class Product extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'price',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'price' => 'float',
    ];
}
