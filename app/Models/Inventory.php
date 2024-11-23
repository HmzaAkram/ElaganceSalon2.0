<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'tbl_inventory';
    protected $fillable = [
        'productName',
        'productDescription',
        'stock',
        'productImage',
        'productPrice',
        'productStatus',
        'productExpiry',
    ];
}
