<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Models
 * @property integer $id
 * @property string $product_name
 * @property string|null $product_code
 * @property integer $product_qty
 * @property \Illuminate\Database\Eloquent\Collection $productMaterial
 */

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_code',
        'product_qty',
    ];

    protected $hidden = [self::CREATED_AT, self::UPDATED_AT];

    protected $casts = [
        'product_name' => 'string',
        'product_code' => 'string',
        'product_qty' => 'integer',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productMaterial(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProductMaterial::class);
    }
}
