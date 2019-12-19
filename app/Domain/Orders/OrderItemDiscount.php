<?php

namespace App\Domain\Orders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class OrderItemDiscount extends Model
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

    public function item(): BelongsTo
    {
        return $this->belongsTo(OrderItem::class);
    }
}
