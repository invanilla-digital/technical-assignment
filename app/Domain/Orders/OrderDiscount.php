<?php

namespace App\Domain\Orders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class OrderDiscount extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'percent',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'percent' => 'integer',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
