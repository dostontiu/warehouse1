<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Warehouse
 * @package App\Models
 * @property integer $id
 * @property integer|null $material_id
 * @property float|null $remainder
 * @property float|null $price
 * @property Material|null $material
 */

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'material_id',
        'remainder',
        'price',
    ];

    protected $hidden = [self::CREATED_AT, self::UPDATED_AT];

    protected $casts = [
        'material_id' => 'integer',
        'remainder' => 'float',
        'price' => 'decimal',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function material(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Material::class);
    }
}
