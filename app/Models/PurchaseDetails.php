<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    protected $fillable = [
        'shopping_id',
        'product_id',
        'quantity',
        'price',
    ];
    public function purchase(){
        return $this->belongsTo(Purchase::Class);
    }
    public function product(){
        return $this->belongsTo(Product::Class);
    }
    use HasFactory;
}
