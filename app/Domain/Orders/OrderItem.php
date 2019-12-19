<?php

namespace App\Domain\Orders;

use App\Domain\Products\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class OrderItem extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'id' => 'integer',
        'product_id',
        'quantity',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function discounts(): HasMany
    {
        return $this->hasMany(OrderItemDiscount::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
