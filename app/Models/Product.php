<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code',
        'name',
        'image',
        'stock',
        'precio',
        'status',
        'category_id',
        'provider_id',
    ];

    public function category(){
        return $this->belongsTo(Category::Class);
    }
    public function provider(){
        return $this->belongsTo(Provider::Class);
    }
    use HasFactory;
}
