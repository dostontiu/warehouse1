<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductMaterial
 * @package App\Models
 * @property integer $id
 * @property integer|null $product_id
 * @property integer|null $material_id
 * @property float $quantity
 */

class ProductMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'material_id',
        'quantity',
    ];

    protected $hidden = [self::CREATED_AT, self::UPDATED_AT];

    protected $casts = [
        'product_id' => 'integer',
        'material_id' => 'integer',
        'quantity' => 'float',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function material(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Material::class);
    }
}
