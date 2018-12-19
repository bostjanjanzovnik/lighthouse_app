<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderProduct extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'order_products';

    /**
     * @var array
     */
    protected $hidden = [
        'deleted_at',
    ];
}
