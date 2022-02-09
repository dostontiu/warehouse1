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
 * @property \Illuminate\Database\Eloquent\Collection $productMaterial
 */

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_code',
    ];

    protected $hidden = [self::CREATED_AT, self::UPDATED_AT];

    protected $casts = [
        'product_name' => 'string',
        'product_code' => 'string',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productMaterial(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProductMaterial::class);
    }
}
