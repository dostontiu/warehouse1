<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Material
 * @package App\Models
 * @property integer $id
 * @property string $name
 */

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
    ];

    protected $hidden = [self::CREATED_AT, self::UPDATED_AT];

    protected $casts = [
        'product_name' => 'string',
    ];
}
