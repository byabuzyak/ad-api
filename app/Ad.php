<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ad
 * @property string $text
 * @property double $price
 * @property int $amount
 * @property int $current_views
 * @property string banner
 */
class Ad extends Model
{
    /**
     * @var int[]
     */
    protected $attributes = [
        'current_views' => 0
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'text',
        'price',
        'amount',
        'banner'
    ];
}
