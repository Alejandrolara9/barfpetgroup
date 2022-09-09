<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'user_id',
        'provider_id',
        'impuesto',
        'total',
        'status',
        'picture',
    ];
    public function user(){
        return $this->belongsTo(User::Class);
    }
    public function provider(){
        return $this->belongsTo(Provider::Class);
    }
    public function purchaseDetails(){
        return $this->hasMany(PurchaseDetails::Class);
    }
    use HasFactory;
}
