<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notapond extends Model
{
    use HasFactory;
    protected $table = 'notapond';
    protected $fillable = [
        'nopond',
        'customer_id',
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function notaponditem()
    {
        return $this->hasMany(Notaponditem::class);
    }
}
