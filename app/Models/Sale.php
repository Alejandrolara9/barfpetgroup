<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'user_id',
        'client_id',
        'sale_date',
        'impuesto',
        'total',
        'status',
    ];
    public function user(){
        return $this->belongsTo(User::Class);
    }
    public function client(){
        return $this->belongsTo(Client::Class);
    }
    public function saleDetails(){
        return $this->hasMany(SaleDetails::Class);
    }
    use HasFactory;
}
