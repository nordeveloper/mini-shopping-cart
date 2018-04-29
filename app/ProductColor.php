<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'price',
        'hexa_code',
        'stock',
    ];

    /**
     * Get product belogns to color.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
