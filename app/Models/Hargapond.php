<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hargapond extends Model
{
    use HasFactory;
    protected $fillable = [
        'label_harga',
        'harga'
    ];
    public function notaponditem()
    {
        return $this->hasMany(Notaponditem::class);
    }
}
