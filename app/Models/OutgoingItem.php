<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OutgoingItem extends Model
{
    protected $fillable = [
        'product_id',
        'outgoing_date',
        'quantity',
        'price',
        'total',
        'reason',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
