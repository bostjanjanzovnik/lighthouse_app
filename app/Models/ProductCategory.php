<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'product_category';

    /**
     * @var array
     */
    protected $hidden = [
        'deleted_at',
    ];
}
