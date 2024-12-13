<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncomingItem extends Model
{
    protected $fillable = [
        'product_id',
        'incoming_date',
        'quantity',
        'price',
        'total',
        'image',
        'condition',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
