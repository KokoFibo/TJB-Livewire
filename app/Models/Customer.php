<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{


    use HasFactory;

    protected $fillable = [
        'title_id',
        'name',
        'address',
        'city',
        'phone',
        'mobile',
        'email'
    ];

    public function title()
    {
        return $this->belongsTo(Title::class);
    }
}
