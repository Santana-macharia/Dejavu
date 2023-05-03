<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'date_created',
        'username',
        'product_name',
        'current_quantity',
        'transfer_quantity',
        'department_name',
    ];
    use HasFactory;
}
