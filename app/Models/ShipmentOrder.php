<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentOrder extends Model
{
    use HasFactory;

    public function venderuser()
    {
        return $this->hasOne(User::class, 'vendor_id', 'id');
    }
    public function orderuser()
    {
        return $this->hasOne(User::class, 'orderby_id', 'id');
    }

    public function product()
    {
        return $this->hasOne(Product::class , 'product_id', 'id');
    }
}
